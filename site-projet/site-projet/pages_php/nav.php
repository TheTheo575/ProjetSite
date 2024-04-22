<nav><!--Menu de navigation-->
<!--Tous ce code permet d'accéder au différentes pages de notre site ( ce sont des liens)-->
<?php
    if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){
        echo'<div class="conteneur-nav">';
        if($_SESSION["current_page"]=="accueil"){echo'<a href="../pages_php/accueil.php" class="lien-interne"><b><u>Accueil</u></b></a>';}
        else{ echo'<a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>';}
        if($_SESSION["current_page"]=="menuadmin"){ echo'<a href="../pages_php/menu_admin.php" class="lien-interne"><b><u>Menu</u></b></a>';}
        else{ echo'<a href="../pages_php/menu_admin.php" class="lien-interne">Menu</a>';}
        if($_SESSION["current_page"]=="reservadmin"){ echo'<a href="../pages_php/reservations_admin.php" class="lien-interne"><b><u>Réservations</u></b></a>';}
        else{ echo'<a href="../pages_php/reservations_admin.php" class="lien-interne">Réservations</a>';}
        echo'<a href="logout.php" class="lien-interne" style="fontsize: 2px;">Se déconnecter</a>';
        echo'admin = '.$_SESSION['admin'];
    }
    else{
        echo'<div class="conteneur-nav">';
        if($_SESSION["current_page"]=="accueil"){echo'<a href="../pages_php/accueil.php" class="lien-interne"><b><u>Accueil</u></b></a>';}
        else{ echo'<a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>';}
        if($_SESSION["current_page"]=="menu"){ echo'<a href="../pages_php/menu.php" class="lien-interne"><b><u>Menu</u></b></a>';}
        else{ echo'<a href="../pages_php/menu.php" class="lien-interne">Menu</a>';}
        if($_SESSION["current_page"]=="reserv"){ echo'<a href="../pages_php/reservation.php" class="lien-interne"><b><u>Réservation</u></b></a>';}
        else{ echo'<a href="../pages_php/reservation.php" class="lien-interne">Réservation</a>';}
        if($_SESSION["current_page"]=="collab"){ echo'<a href="../pages_php/collab.php" class="lien-interne"><b><u>Partenaires</u></b></a>';}
        else{ echo'<a href="../pages_php/collab.php" class="lien-interne">Partenaires</a>';}

        if($_SESSION["current_page"]=="profil"){ 
            echo'<a href="../pages_php/account.php" class="lien-interne"><b><u>Profils</u></b></a>';
        }
        else{ 
            echo'<a href="../pages_php/account.php" class="lien-interne">Profils</a>';
        }
        if($_SESSION["current_page"]=="connexion"){ 
            echo'<a href="../pages_php/account_connexion.php" class="lien-interne"><b><u>Se connecter</u></b></a>';
        }
        else{ 
            echo'<a href="../pages_php/account_connexion.php" class="lien-interne">Se connecter</a>';
        }

        if(!isset($_SESSION['authentifie']) || $_SESSION['authentifie']==false){
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