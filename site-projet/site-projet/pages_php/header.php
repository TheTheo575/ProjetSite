<!-- Cette partie sera intégrée dans chaque page, permettant d'automatiser la création du haut de la page sans répétitions -->

<head><!--partie en charge de stocker les infos de la page-->

    <title><?php echo $_SESSION['current_page']; ?></title><!--Titre de la page-->
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Accueil">
    <meta name="description" content="Site de la ch'tite mamie">

    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

</head>

<body><!--partie du code  en charge du contenu-->

    <header><!--Tête du contenu (haut de page)-->

        <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
       <!--liens pour faire apparaitre le logo du site-->
        <p style="display:inline;">Ch'tite mamie</p><!--Paragraphe pour le Nom du restaurant-->
        

    </header>

    <nav><!--Menu de navigation-->

<!--Tous ce code permet d'accéder au différentes pages de notre site (ce sont des liens)-->
<?php
    if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){
        echo'<div class="conteneur-nav">';
        if($_SESSION["current_page"]=="Accueil") echo'<a href="../pages_php/accueil.php" class="lien-interne"><b><u>Accueil</u></b></a>';
        else echo'<a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>';
        if($_SESSION["current_page"]=="Menu_admin") echo'<a href="../pages_php/menu_admin.php" class="lien-interne"><b><u>Menu</u></b></a>';
        else echo'<a href="../pages_php/menu_admin.php" class="lien-interne">Menu</a>';
        if($_SESSION["current_page"]=="Reservations") echo'<a href="../pages_php/reservations_admin.php" class="lien-interne"><b><u>Réservations</u></b></a>';
        else echo'<a href="../pages_php/reservations_admin.php" class="lien-interne">Réservations</a>';
        echo'<a href="logout.php" class="lien-interne" style="fontsize: 2px;">Se déconnecter</a>';
    }
    else{
        echo'<div class="conteneur-nav">';
        if($_SESSION["current_page"]=="Accueil") echo'<a href="../pages_php/accueil.php" class="lien-interne"><b><u>Accueil</u></b></a>';
        else echo'<a href="../pages_php/accueil.php" class="lien-interne">Accueil</a>';
        if($_SESSION["current_page"]=="Menu") echo'<a href="../pages_php/menu.php" class="lien-interne"><b><u>Menu</u></b></a>';
        else echo'<a href="../pages_php/menu.php" class="lien-interne">Menu</a>';
        if($_SESSION["current_page"]=="Reservation") echo'<a href="../pages_php/reservation.php" class="lien-interne"><b><u>Réservation</u></b></a>';
        else echo'<a href="../pages_php/reservation.php" class="lien-interne">Réservation</a>';
        if($_SESSION["current_page"]=="Partenaires") echo'<a href="../pages_php/collab.php" class="lien-interne"><b><u>Partenaires</u></b></a>';
        else echo'<a href="../pages_php/collab.php" class="lien-interne">Partenaires</a>';

        if(!isset($_SESSION['authentifie']) || $_SESSION['authentifie']==false){
            if($_SESSION["current_page"]=="Connexion") echo'<a href="../pages_php/account_connexion.php" class="lien-interne"><b><u>Se connecter</u></b></a>';
            else echo'<a href="../pages_php/account_connexion.php" class="lien-interne">Se connecter</a>';
        }
        else{
            if($_SESSION["current_page"]=="Profil") echo'<a href="../pages_php/account.php" class="lien-interne"><b><u>Profil</u></b></a>';
            else echo'<a href="../pages_php/account.php" class="lien-interne">Profil</a>';
        }
        
    }

    echo "</div>";
    ?>
    </nav>