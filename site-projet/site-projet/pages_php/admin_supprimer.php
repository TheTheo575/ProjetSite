<?php
    // Vérifie si le paramètre 'identifiant' est présent dans l'URL (via la méthode GET)
    if(isset($_GET["identifiant"])){
        try {
            require("connexion.php"); // Inclut le fichier de connexion à la base de données
            
            // Prépare une requête SQL pour supprimer une réservation en utilisant l'identifiant spécifié dans l'URL
            $stmt = $conn->prepare("DELETE FROM ??? WHERE Id = ?");
            // "???" : Remplacez ceci par le nom de votre table contenant les réservations
            
            // Exécute la requête SQL en remplaçant le paramètre par la valeur de 'identifiant' dans l'URL
            $stmt->execute(array($_GET['identifiant']));
            
            $conn = NULL; // Ferme la connexion à la base de données
            
            // Redirige vers une autre page après la suppression de la réservation (changez "html.php" par le nom de la page de votre choix)
            header("Location:html.php"); // Redirige vers html.php (changez le nom du fichier cible selon vos besoins)
        } catch(Exception $e) {
            die("Erreur : " . $e->getMessage()); // En cas d'erreur, affiche le message d'erreur et arrête le script
        }
    }
?>
