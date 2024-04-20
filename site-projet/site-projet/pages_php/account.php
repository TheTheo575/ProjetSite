<?php
session_start();
include_once 'setting.php';

$_SESSION["current_page"]="profil";

if (isset($_SESSION['mail'])) {
    $user_email = $_SESSION['mail'];
}
else {
    $_SESSION['erreur_connexion'] = "Aucun compte enregistré"; // Petit message à utiliser au cas ou
    $conn = NULL;
    header('location:connexion.php');
}

// Requête pour récupérer les informations du profil de l'utilisateur
$reqSQL = "SELECT * FROM profils WHERE Email=?";
$rep = $conn->prepare($reqSQL);
$rep->execute(array($user_email));

$result = $rep->fetchAll(PDO::FETCH_ASSOC); // Récupération du tableau d'information

//Récupération des données de l'utilisateur dans des variables php
$nom = $result[0]['Nom'];
$prenom = $result[0]['Prenom'];
$telephone = $result[0]['Telephone'];
$email = $result[0]['Email'];

?>

<!DOCTYPE html>
<html lang="fr">

    <head><!--partie en charge de stocker les infos de la page-->

        <title>Profil</title><!--Titre de la page-->
        <meta charset="utf-8">
        <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
        <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Accueil">
        <meta name="description" content="Site de la ch'tite mamie">

        <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
        <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

    </head>

    <body><!--partie du code  en charge du contenu-->

        <header><!--Tête du contenu (haut de page)-->

            <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <!--liens pour faire apparaitre le logo du site-->
            <p style="display:inline;">Ch'tite mamie</p><!--Paragraphe pour le Nom du restaurant-->
            

        </header>

        <?php
        include "nav.php";
        ?>

        <main><!--partie en charge du contenu principale de la page-->

            <div class="conteneur-accueil">
                <p style="text-decoration:underline;">Voici votre profil :</p><!--paragraphe avec le texte souligné-->
                <table> <!--tableau affichant les données sur le profil-->
                    <tr>
                        <th colspan="2">Informations sur le compte</th>
                    </tr>
                <?php
                    echo '<tr><td>Nom</td><td>' . $nom . '</td></tr>';
                    echo '<tr><td>Prénom</td><td>' . $prenom . '</td></tr>';
                    echo '<tr><td>Téléphone</td><td>' . $telephone . '</td></tr>';
                    echo '<tr><td>Email</td><td>' . $email . '</td></tr>';
                ?>
                </table>
            </div>
        </main>

        <footer>
            <div id="footer">
            <div class="contact">
            <p class="foot">Nous contacter</p>
            <p>Téléphone : +33 3 16 14 23 XX</p>
            <p>Mail : ChtiteMamie@gmail.com</p>
            </div>

            <div class="carte">
            <p class="foot">Où nous trouver :</p>
            <div id="rectanglecarte">
            <!--code permetant l'affichage d'une map avec un emplacement-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.5773028165336!2d2.430749075747542!3d50.968518971695794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf360f6b0d15b%3A0x1fde110afbf3f137!2sBergues!5e0!3m2!1sfr!2sfr!4v1702378398429!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>

            <div class="reseaux">
            <p class="foot">Nos Réseaux :</p>
            <!--permet de d'afficher des images qui servent aussi de lien-->
            <div class="conteneur-image">
                <a href="https://twitter.com/LachtiteMami" class="lien-image" target="_blank"><img src="../images/twitter.png" alt="logo twitter"></a>
                <a href="https://www.instagram.com/la_chtite_mamie" class="lien-image" target="_blank"><img src="../images/instagram.png" alt="logo insta"></a>
                <a href="http://facebook.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/facebook.png" alt="logo facebook"></a>
            </div>
            </div>
            <a href="./cookies.php" id="cookies">Cookies d'utilisation</a>
            </div>

        </footer>

    </body>

    <?php
    $conn = NULL;
    ?>

</html>