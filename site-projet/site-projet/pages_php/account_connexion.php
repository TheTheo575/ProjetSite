<?php
session_start();
include_once 'setting.php';

if (!isset($_SESSION['accueil'])|| !$_SESSION['accueil']) { // Si l'utilisateur n'est pas passé par l'accueil on l'y renvoie
    header('location:accueil.php');
}

$_SESSION["current_page"]="Connexion";

//Dans un premier temps, nous vérifions le formulaire d'inscription :
if (isset($_POST['register'])) {
    $nom = nettoyer_donnees($_POST['nom']);
    $prenom = nettoyer_donnees($_POST['prenom']);
    $email = nettoyer_donnees($_POST['email']);
    $telephone = nettoyer_donnees($_POST['telephone']);
    $mot_de_passe = nettoyer_donnees($_POST['mot_de_passe']); // Hashage du mot de passe

    //Puis nous vérifions si l'email n'existe pas déjà :
    $stmt = $conn->prepare("SELECT * FROM profils WHERE Email = ?");
    $stmt->execute([$email]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        $_SESSION['MessageErreur']="Cet email est déjà utilisé. Veuillez en choisir un différent ou vous connecter.";
    }
    else {
        //On insère l'utilisateur dans la base de données
        $stmt = $conn->prepare("INSERT INTO profils (Nom, Prenom, Email, Telephone, MotDePasse) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $email, $telephone, $mot_de_passe]);
        //echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    //On récupère l'utilisateur depuis la base de données
    $stmt = $conn->prepare("SELECT * FROM profils WHERE Email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //On affiche un message d'erreur si aucun compte n'existe
    if (count($user) < 1) {
        $_SESSION['MessageErreur']="Cet email n'existe pas, essayez de créer un compte.";
    }
    else{
        //On vérifie si l'email et le mot de passe sont corrects :
        if ($mot_de_passe == $user[0]['MotDePasse']) {
            //Authentification réussie : définir les variables de session
            $_SESSION['authentifie'] = true;
            $_SESSION['mail'] = $email;

            $testadminSQL = $conn->prepare("SELECT * FROM profils WHERE Email= ?");
            $testadminSQL->execute([$email]);
            $testadmin = $testadminSQL->fetch(PDO::FETCH_ASSOC);
            if($testadmin ['Admin'] == 1) $_SESSION['admin']=true;
            else $_SESSION['admin']=false;
            $_SESSION["TEST"]=$testadmin[0]['Admin'];
            header("location: account.php");
        } else {
            //Authentification échouée : afficher un message d'erreur
            $_SESSION['MessageErreur'] = "Email ou mot de passe incorrect.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
    
    <?php
    include "header.php";
    ?>

        <main><!--partie en charge du contenu principale de la page-->

            <h1>Connexion / Inscription</h1>

            <div class='formreserv'><!--Formulaire pour connecter ou inscrire l'utilisateur-->
                <form method='post' action='account_connexion.php'>
                    <fieldset>
                        <legend>Choix profil </legend>
                        <select name='choix' required>
                            <option value='connexion'>Connexions</option>
                            <option value='inscription'>Inscription</option>
                        </select>
                        <br>
                        <?php
                        if(isset($_SESSION['MessageErreur'])){
                            echo "<i style='font-size: 13px;'>".$_SESSION['MessageErreur']."</i><br>";
                            $_SESSION['MessageErreur'] = '';
                            unset($_SESSION['MessageErreur']);
                        }
                        ?>
                        <input type='submit' value='valider' id='choise' name='choise'>
                    </fieldset>
                </form>
             </div>

         <br><br>

         <?php

        //Si l'utilisateur a envoyé son choix :
         if (isset($_POST['choise'])) {
            //Si l'utilisateur veut s'inscrire :
            if ($_POST['choix'] == 'inscription') {
                //Formulaire d'inscription :
                //Grâce à la méthode POST,
                //Nous allons envoyer toutes les données de l'utilisateur à la tble "profils"
                echo'
                <h2>Inscription</h2>
                <div class="formreserv">
                    <form method="post" action="account_connexion.php">
                        <fieldset>
                            <label>Nom:</label>
                            <input type="text" name="nom" required><br>
                            <label>Prenom:</label>
                            <input type="text" name="prenom" required><br>
                            <label>Telephone:</label>
                            <input type="text" name="telephone" required><br>
                            <label>Email:</label>
                            <input type="email" name="email" required><br>
                            <label>Mot de passe:</label>
                            <input type="password" name="mot_de_passe" required><br>
                            <input type="submit" value="S\'inscrire" name="register">
                        </fieldset>
                    </form>
                </div>';
            }
            //Si l'utilisateur veut se connecter :
            if ($_POST['choix'] == 'connexion') {
                //Formulaire de connexion :
                //Pour que l'utilisateur puisse se connecter,
                //on va lui demander seulement son email et son mot de passe
                echo'
                <h2>Connexion</h2>
                <div class="formreserv">
                    <form method="post" action="account_connexion.php">
                        <fieldset>
                            <label>Email:</label>
                            <input type="email" name="email" required><br>
                            <label>Mot de passe:</label>
                            <input type="password" name="mot_de_passe" required><br>
                            <input type="submit" value="Se connecter" name="login">
                        </fieldset>
                    </form>
                </div>';
            }
         }
         ?>
        </main>

        <?php
        include "footer.php";
        ?>

        <?php
            $conn = NULL;
        ?>

    </body>
</html>
