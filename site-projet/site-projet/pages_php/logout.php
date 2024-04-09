<?php

		session_start(); //Démarrer la session
	if($_SESSION['authentifie']=true){ // si un utilisateur est authentifié (session en cours)
		session_unset(); //détruire les variables de sessions
		session_destroy();//détruire la session
		header("Location: accueil.php");
	}
	
?>
