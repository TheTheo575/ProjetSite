<nav><!--Menu de navigation-->
<!--Tous ce code permet d'accéder au différentes pages de notre site ( ce sont des liens)-->
<?php
    if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){
        echo'<div class="conteneur-nav">';
        if($_SESSION["current_page"]=="accueil"){echo'<a href="../pages_php/accueil.php" class="lien-interne"><b><u>Accueil</u></b></a>';}
        else{ echo'<a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>';}
        if($_SESSION["current_page"]=="menu"){ echo'<a href="../pages_php/menu.php" class="lien-interne"><b><u>Menu</u></b></a>';}
        else{ echo'<a href="../pages_php/menu.php" class="lien-interne">Menu</a>';}
        if($_SESSION["current_page"]=="reservadmin"){ echo'<a href="../pages_php/reservations_admin.php" class="lien-interne"><b><u>Réservations</u></b></a>';}
        else{ echo'<a href="../pages_php/reservations_admin.php" class="lien-interne">Réservations</a>';}
        echo'<a href="logout.php" class="lien-interne" style="fontsize: 2px;">Se déconnecter</a>';
    }
    else{
        ?>
        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>
            <a href="../pages_php/menu.php" class="lien-interne">Menu</a>
            <a href="../pages_php/accueil_eng.php" class="lien-interne"><b><u>FRA</u></b>/ENG</a>
            <a href="../pages_php/reservation.php" class="lien-interne">Réservation</a>
            <a href="../pages_php/collab.php" class="lien-interne">Partenaires</a>
            <?php 
        if(!isset($_SESSION['authentifie']) || $_SESSION['authentifie']=false){
            ?>
            <a href="connexion.php" class="lien-interne">Se connecter</a>
            <?php
        }
        else{
            ?>
            <a href="logout.php" class="lien-interne">Se déconnecter</a>
            <?php
        }
        ?>
        </div>
        <?php
    }
    ?>
    </nav>