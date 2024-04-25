<?php
    session_start();
    include_once 'setting.php';

    $_SESSION["current_page"]="Profil";

    if (isset($_SESSION['mail'])) {
        $user_email = $_SESSION['mail'];
    }
    else {
        $_SESSION['erreur_connexion'] = "Aucun compte enregistré";
        $conn = NULL;
        header('location:account_connexion.php');
    }

    // Requête pour récupérer les informations du profil de l'utilisateur
    $reqSQL = "SELECT * FROM profils WHERE Email = ?";
    $rep = $conn->prepare($reqSQL);
    $rep->execute(array($user_email));

    $result = $rep->fetchAll(PDO::FETCH_ASSOC); // Récupération du tableau d'information

    //Récupération des données de l'utilisateur dans des variables php
    $nom = $result[0]['Nom'];
    $prenom = $result[0]['Prenom'];
    $telephone = $result[0]['Telephone'];
    $email = $result[0]['Email'];

    if($_SESSION["admin"]==true)$typecompte="Admin";
    else{
        setcookie("UserPrenom",$prenom,(time()+(3600*24*365)),'/','',false,true);
        setcookie("UserNom",$nom,(time()+(3600*24*365)),'/','',false,true);
        setcookie("UserTel",$telephone,(time()+(3600*24*365)),'/','',false,true);
        $typecompte="Client";
    }
    
?>

<!DOCTYPE html>
    <html lang="fr">

    <?php
    include "header.php";
    ?>

            <main><!--partie en charge du contenu principale de la page-->
                <div class="conteneur-accueil">
                <?php echo 'Bonjour '.$prenom.' !';?>
                </div>
                <div class="conteneur-accueil">
                    <table> <!--tableau affichant les données sur le profil-->
                        <tr>
                            <th colspan="2">Informations sur le compte</th>
                        </tr>
                    <?php

                        echo '<tr><td>Nom</td><td>' . $nom . '</td></tr>';
                        echo '<tr><td>Prénom</td><td>' . $prenom . '</td></tr>';
                        echo '<tr><td>Téléphone   </td><td>' . $telephone . '</td></tr>';
                        echo '<tr><td>Email</td><td>' . $email . '</td></tr>';
                        echo '<tr><td>Compte</td><td>' . $typecompte . '</td></tr>';
                    ?>
                    </table>
                </div>
                <div class="conteneur_collab">
                <a href="logout.php" style="color: black;">Se déconnecter</a>            
                </div>
            </main>

            <?php
            include "footer.php";
            ?>

        </body>

        <?php
            $conn = NULL;
        ?>

</html>
