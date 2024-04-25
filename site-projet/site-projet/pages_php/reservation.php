<?php

    session_start();
    include_once 'setting.php';
    if (!isset($_SESSION['accueil'])|| !$_SESSION['accueil']) { // Si l'utilisateur n'est pas passé par l'accueil on l'y renvoie
        header('location:accueil.php');
    }
    $_SESSION["current_page"]="Reservation";

    if(isset($_POST["nom"]) && isset($_POST['Réserver'])){
		$nom=nettoyer_donnees($_POST["nom"]);
		$prenom=nettoyer_donnees($_POST["prenom"]);
		$tel=nettoyer_donnees($_POST["tel"]);
		$date=nettoyer_donnees($_POST["date"]);
		$nbrparticipant=nettoyer_donnees($_POST["nbrparticipant"]);
		$time=nettoyer_donnees($_POST["time"]);
		if($_POST["nbrparticipant"]>15) $event=$_POST["event"];
		else $event="NONE";

		if(valider_NomPrenom($prenom) && valider_NomPrenom($nom)){
            require_once("setting.php");
			$prereq= $conn->prepare("INSERT INTO `reservation` (`Id`, `Nom`, `Prenom`, `Date`, `Heure`, `Nombre`, `Event`) VALUES (NULL,?,?,?,?,?,?)");
            $prereq->execute([$nom, $prenom, $date, $time, $nbrparticipant, $event]); 
            
            $req = $conn->prepare("SELECT * FROM reservation WHERE Nom=? AND Prenom=? AND Date=? AND Heure=? AND Nombre=? AND Event=?"); //Préparation de la requete
            $req->execute([$nom, $prenom, $date, $time, $nbrparticipant, $event]); //Execution de la requete pour les entrees
            $result = $req->fetch(PDO::FETCH_ASSOC);//récupérer le résultat pour les entrées
            $_SESSION['reserv'] = $result['Id'];
            header('location:confirmation.php');
		}
	}
?>
	
<!DOCTYPE html>
<html lang="fr">

    <?php
    include "header.php";
    ?>
   
    <main>
     <div class="formreserv">
        <?php

        
        if(isset($_POST["EnvoieValide"])||$_SERVER['REQUEST_METHOD']!='POST')
        {
		    header('reservation.php');
        ?>
            <div class='reservation'><form method='post' action='reservation.php'legend='nbr client'><fieldset><label> Nombre de Personne: <label>
            <input type='text' name='nbrparticipant' id='nbrparticipant' required pattern='[1-9]{1}[0-9]*'>
            <input type='submit' name='Envoyer' Value='Valider'/></fieldset></form></div>
            <?php
        }
        if(isset($_POST['nbrparticipant'])){
            $vnb = $_POST['nbrparticipant'];
            ?>
            <div class='reservation'>
                <form method='post' action='reservation.php'>
                    <fieldset>
                        
                        <legend>Votre réservation : </legend>
                        <label for='nom'>Nom :</label>
                        <?php echo "<input type='text' name='nom' id='nom' placeholder='Votre nom' required pattern='^[A-Za-z '-]}$' maxlenghth='40' value=".$_COOKIE['UserNom']."  onFocus=\"this.value='';\"/>" ?>
                        <img src='../images/Assiette.png' alt='LogoAssiette' id='Assiette'> <p style='display:inline;'></p>
                        <br><br />
                        <label for='prenom'>Prénom :</label>
                        <?php echo "<input type='text' name='prenom' id='prenom' placeholder='votre Prénom' required pattern='^[A-Za-z '-]}$' maxlenghth='40' value=".$_COOKIE['UserPrenom']."  onFocus=\"this.value='';\"/>" ?>
                        <br><br />

                        <label >Date de Réservation: </label>
                        <input type='date' name='date' id='date' required/>
                        <br><br />
                        <label >Heure de réservation: </label>
                        <input type='time' name='time'id='time' required />
                        <br><br />
                        <label >Numero de téléphone: </label>
                        <?php echo "<input type='tel' name='tel' id='tel' placeholder='Numéro de téléphone' value=".$_COOKIE['UserTel']."  onFocus=\"this.value='';\" required />" ?>
                        <br><br />
                        <?php
                        echo"<label> Nombre de Personne: <label>
                        <input type='text' name='nbrparticipant' id='nbrparticipant' required pattern='[1-9]{1}[0-9]*' value='$vnb'; >
                        <br><br />";
                        if($vnb>=16){
                        ?>
                            <label>Type évenenment: </label>
                            <select name='event' required>
                                <option>Anniversaire</option>
                                <option>Mariage</option>
                                <option>Séminaire</option>
                                <option>Soirée</option>
                            
                            </select>
                        <?php
                        }
                        if(isset($_COOKIE['UserNom']) && isset($_COOKIE['UserPrenom']) && isset($_COOKIE['UserTel']))echo "<i style='font-size: 13px;'>Vos informations ont été préremplies</i>";
                        echo"<br><br>";
                        ?>
                        <input type='submit' name='Réserver' id='reservation' value='Reserver' />
                        
                        <br><br />
                        <i class='chut'>*toutes vos informations personnelles sont confidentielles</i>
                    </fieldset>
                </form>
            </div>
        <?php
        }
        
        ?>
        
   
        

        <br /><br /><br /><br />

        
    </div>
    </main>

    <?php
    include "footer.php";
    ?>

</body>

</html>
