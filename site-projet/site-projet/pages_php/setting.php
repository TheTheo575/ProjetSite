<?php
    // Bienvenue
    
    // Ré-écriture des fonctions de nettoyage de donné, de validation / Je me suis occupé aussi des required sur le html - By GG
    function nettoyer_donnees($donnees){
		$donnees = trim($donnees);
		$donnees = stripcslashes($donnees);
		$donnees = htmlspecialchars($donnees);
		return $donnees;
	}
	
	function valider_NomPrenom($NomPrenom){
		if(empty($NomPrenom) || strlen($NomPrenom) > 40 || !preg_match("/^[A-Za-z '-]+$/", $NomPrenom)) {
			return false;
		}
		return true;
	}
	
	function valider_Telephone($tel){
		if(empty($tel) || !preg_match("/^0[0-9]{9}/", $tel) || !preg_match("/[ ]*/", $tel)) {
			return false;
		}
		return true;
	}

	// Connexion à la base de donné
	$servername ='localhost'; 
	$username ='root'; 
	$password ='root'; 
	$database ='chtitemamie_bd';
	
	$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

    // Comme j'ai vu, que tout réservation prise moins d'une semaine avant, n'est pas prise en compte, j'ai créer ça
    function valider_date($date_entre) {
        if (empty($date_entre) || strtotime($date_entre) >  strtotime('-1 week')) {
            return false;
        }
        return true;
    }
	if(isset($_POST["nom"]) && isset($_POST['Réserver'])){
		$nom=nettoyer_donnees($_POST["nom"]);
		$prenom=nettoyer_donnees($_POST["prenom"]);
		$tel=nettoyer_donnees($_POST["tel"]);
		$date=$_POST["date"];
		$nbrparticipant=nettoyer_donnees($_POST["nbrparticipant"]);
		$time=nettoyer_donnees($_POST["time"]);
		if($_POST["nbrparticipant"]>=16){
			$event=$_POST["event"];
		}
		else{
			$event="NONE";
		}
		if(valider_NomPrenom($prenom) && valider_NomPrenom($nom)){
			$req="INSERT INTO reservation (Id, Nom, Prenom, Date, Heure, Nombre, Event) VALUES (NULL,?,?,?,?,?,?) ";
			$prereq= $conn->prepare($req);
			$prereq->execute([$nom,$prenom,$date,$time,$nbrparticipant,$event]);
			header('Location : confirmation.php');
		}	
	}
?>