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
	
	function valider_email($email){
		if(empty($email) || !preg_match("/[a-zA-Z.'-]+@[a-zA-Z.]*(junia.com)$/", $email)) {
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
	
	function valider_Photo($photo){
		if(empty($photo) || filesize($photo) > 1000000 || (!preg_match("/(jpg)$/",$_FILES['photo']['name']) && !preg_match("/(jpeg)$/",$_FILES['photo']['name']) && !preg_match("/(png)$/",$_FILES['photo']['name']))) {
			return false;
		}
		return true;
	}

    // Comme j'ai vu, que tout réservation prise moins d'une semaine avant, n'est pas prise en compte, j'ai créer ça
    function valider_date($date_entre) {
        if (empty($date_entre) || strtotime($date_entre) >  strtotime('-1 week')) {
            return false;
        }
        return true;
    }

	// Connexion à la base de donné
	$servername = 'locahost'; $username='root'; $password='root'; $database='chtitemamie_bd';
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		catch(Exception $e){
			die("Erreur : " . $e->getMessage());
        }
	}
?>