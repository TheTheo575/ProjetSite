<?php
    // Vérifie si le formulaire a été soumis (le bouton "Ajouter" a été cliqué)
    if(isset($_POST["Ajouter"])){
        try{
            require("connexion.php"); // Inclut le fichier de connexion à la base de données
            
            // Prépare une requête SQL d'insertion dans une table (le nom de la table est manquant : remplacez "???" par le nom de votre table)
            $insertReservationQuery = $conn->prepare("INSERT INTO ??? (Nom, Prenom, NmbPers, DateR, Heure, Tel) VALUES (?, ?, ?, ?, ?, ?)");

            // Exécute la requête SQL en remplaçant les paramètres avec les valeurs provenant du formulaire
            $insertReservationQuery->execute(array(
                $_POST['nom'],      // Valeur du champ 'nom' du formulaire
                $_POST['prenom'],   // Valeur du champ 'prenom' du formulaire
                $_POST['nmbpers'],  // Valeur du champ 'NmbPers' du formulaire
                $_POST['date'],     // Valeur du champ 'date' du formulaire
                $_POST['heure'],    // Valeur du champ 'Heure' du formulaire
                $_POST['tel']       // Valeur du champ 'Tel' du formulaire
            ));

            $conn = NULL; // Ferme la connexion à la base de données

            // Redirection vers une autre page après l'ajout de la réservation (changez "html.php" par le nom de la page de votre choix)
            header("Location:html.php"); // Redirige vers html.php (changez le nom du fichier cible selon vos besoins)
        } catch(Exception $e){
            die("Erreur : " . $e->getMessage()); // En cas d'erreur, affiche le message d'erreur et arrête le script
        }
    }
?>
