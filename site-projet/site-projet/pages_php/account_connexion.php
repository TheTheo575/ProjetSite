﻿<?php
session_start();
include_once 'setting.php';

//Dans un premier temps, nous vérifions le formulaire d'inscription :
if (isset($_POST['register'])) {
    $nom = nettoyer_donnees($_POST['nom']);
    $prenom = nettoyer_donnees($_POST['prenom']);
    $email = nettoyer_donnees($_POST['email']);
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT); // Hashage du mot de passe

    //Puis nous vérifions si l'email n'existe pas déjà :
    $stmt = $conn->prepare("SELECT * FROM profils WHERE Email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        echo "Cet email est déjà utilisé. Veuillez choisir un autre.";
    } else {
        //On insère l'utilisateur dans la base de données
        $stmt = $conn->prepare("INSERT INTO profils (Nom, Prenom, Email, MotDePasse) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $email, $mot_de_passe]);
        echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
    }
}

//Vérification du formulaire de connexion
if (isset($_POST['login'])) {
    $email = nettoyer_donnees($_POST['email']);
    $mot_de_passe = $_POST['mot_de_passe'];

    //On récupère l'utilisateur depuis la base de données
    $stmt = $conn->prepare("SELECT * FROM profils WHERE Email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($mot_de_passe, $user['MotDePasse'])) {
        $_SESSION['auth'] = true;
        $_SESSION['user_id'] = $user['Id'];
        header("Location: profil.php");
        exit();
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}
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
    <body>

        <header><!--Tête du contenu (haut de page)-->

            <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <!--liens pour faire apparaitre le logo du site-->
            <p style="display:inline;">Ch'tite mamie</p><!--Paragraphe pour le Nom du restaurant-->
            

        </header>

        <?php
        include "nav.php";
        ?>

        <main><!--partie en charge du contenu principale de la page-->

            <h1>Connexion / Inscription</h1>

            <div class='formreserv'>
                <form method='post' action='account_connexion.php'>
                    <fieldset>
                        <legend>Commande plat</legend>
                        <select name='choix' required>
                            <option value='connexion'>Connexions</option>
                            <option value='inscription'>Inscription</option>
                        </select>
                        <br><br>
                        <input type='submit' value='valider' id='choise' name='choix'>
                    </fieldset>
                </form>
             </div>

         <br><br>

         <?php

         if (isset($_POST['choix'])) {
            if ($_POST['choix'] == 'Inscriptin') {
                //Formulaire d'inscription
                echo"
                <h2>Inscription</h2>
                <form method="post" action="">
                    <label>Nom:</label>
                    <input type="text" name="nom" required><br>
                    <label>Prénom:</label>
                    <input type="text" name="prenom" required><br>
                    <label>Email:</label>
                    <input type="email" name="email" required><br>
                    <label>Mot de passe:</label>
                    <input type="password" name="mot_de_passe" required><br>
                    <button type="submit" name="register">S'inscrire</button>
                </form>";
            }
            if ($_POST['choix'] == 'Inscriptin') {
                //Formulaire de connexion
                echo"
                <h2>Connexion</h2>
                <form method="post" action="">
                    <label>Email:</label>
                    <input type="email" name="email" required><br>
                    <label>Mot de passe:</label>
                    <input type="password" name="mot_de_passe" required><br>
                    <button type="submit" name="login">Se connecter</button>
                </form>":

         ?>
            

        </main>

    </body>
</html>