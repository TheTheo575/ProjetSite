<?php
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

	function valider_date($date_entre) {
        if (empty($date_entre) || strtotime($date_entre) >  strtotime('-1 week')) {
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
		
?>