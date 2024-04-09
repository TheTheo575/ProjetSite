<?php

    session_start();
    include_once 'setting.php';
    
    // if (!isset($_SESSION['accueil'])) { // Si l'utilisateur n'est pas passé par l'accueil on l'y renvoie
    //     header('location:accueil_eng.php');
    // }

    $reqPrep="SELECT * FROM plats WHERE type=?";//La requete SQL SELECT
    $req = $conn->prepare($reqPrep); //Préparation de la requete

    $req->execute(['entree']); //Execution de la requete pour les entrees
    $result_entree = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les entrées

    $req->execute(['plat']); //Execution de la requete pour les plats
    $result_plat = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les plats

    $req->execute(['dessert']); //Execution de la requete pour les desserts
    $result_dessert = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les desserts

    $req->execute(['boisson']); //Execution de la requete pour les desserts
    $result_boisson = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat pour les desserts
?>
	
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Meal</title>
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Meal">
    <meta name="description" content="ch'tite mamie's Meal">

    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

</head>

<body>

    <header>

        <a href="../pages_php/accueil_eng.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <p style="display:inline;">Ch'tite mamie</p>

    </header>

    <nav>

        <div class="conteneur-nav">
            <a href="../pages_php/accueil_eng.php" class="lien-interne">Home</a>
            <a href="../pages_php/menu_eng.php" class="lien-interne"><b><u>Menu</u></b></a>
            <a href="../pages_php/menu.php" class="lien-interne">FRA/<b><u>ENG</u></b></a>
            <a href="../pages_php/reservation_eng.php" class="lien-interne">Order</a>
            <a href="../pages_php/collab_eng.php" class="lien-interne">Partnership</a>
        </div>

    </nav>

    <main>
        <div id="liste-menu">
            <h1 id="titre">Ch'ti mamie's menu</h1>
            
            <ul class="entrees">
                <li>Our Starters :</li>
                <?php
                for ($i=0; $i<count($result_entree); $i++) {
                    echo "<li>".$result_entree[$i]['name']."</li>";
                }
                ?>
            </ul>
            <ul class="plats">
                <li>Our Dishes:</li>
                <?php
                for ($i=0; $i<count($result_plat); $i++) {
                    echo "<li>".$result_plat[$i]['name']."</li>";
                }
                ?>
            </ul>
            <ul class="desserts">
                <li>Our Desserts:</li>
                <?php
                for ($i=0; $i<count($result_dessert); $i++) {
                    echo "<li>".$result_dessert[$i]['name']."</li>";
                }
                ?>
            </ul>
            <ul class="boissons">
                <li>Drinks:</li>
                <?php
                for ($i=0; $i<count($result_boisson); $i++) {
                    echo "<li>".$result_boisson[$i]['name']."</li>";
                }
                ?>
            </ul>
            <h3 class="chut">Any poisoning directly or indirectly linked to our food will be declined.</h3>
        </div>

        <br />

        <!-----------NOS ENTREES-------------->

        <div id="liste-plats">
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-entree">
                <legend>Our Starters</legend>   <!--Legende de chaque partie (ici les entrées) -->
                <?php
                    for ($i=0;$i<count($result_entree);$i++) {
                        echo '
                        <div class="recette">
                            <!-- Debut carte -->
                            <div class="card-front">
                                <!--Face avant de la carte -->
                                <div>'.$result_entree[$i]['name'].'</div>
                                <img class="photoplat" src="'.$result_entree[$i]['image'].'" alt="'.$result_entree[$i]['name'].'" style="width: 110px; height: 110px;" />
                            </div>
                                
                            <div class="card-back">
                                <div class="lcarte">
                                <!--Face arrière de la carte -->
                                    Ingrédients :<br />
                                    '.$result_entree[$i]['recipe'].'
                                </div>
                            </div> 
                        </div> <!--Fin carte -->';
                    }
                ?>
            </fieldset>
            <!--Fin de la liste des cartes des recettes -->

            <br />
            <br />

            <!-----------NOS PLATS-------------->
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-plat">
                <legend>Our Dishies</legend>   <!--Legende de chaque partie (ici les entrées) -->
                <?php
                    for ($i=0;$i<count($result_plat);$i++) {
                        echo '
                        <div class="recette">
                            <!-- Debut carte -->
                            <div class="card-front">
                                <!--Face avant de la carte -->
                                <div>'.$result_plat[$i]['name'].'</div>
                                <img class="photoplat" src="'.$result_plat[$i]['image'].'" alt="'.$result_plat[$i]['name'].'" style="width: 110px; height: 110px;" />
                            </div>
                                
                            <div class="card-back">
                                <div class="lcarte">
                                <!--Face arrière de la carte -->
                                    Ingrédients :<br />
                                    '.$result_plat[$i]['recipe'].'
                                </div>
                            </div> 
                        </div> <!--Fin carte -->';
                    }
                ?>
            </fieldset>


            <br />
            <br />

            <!-----------NOS DESSERTS-------------->
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-dessert">
                <legend>Our Desserts</legend>
                <?php
                    for ($i=0;$i<count($result_dessert);$i++) {
                        echo '
                        <div class="recette">
                            <!-- Debut carte -->
                            <div class="card-front">
                                <!--Face avant de la carte -->
                                <div>'.$result_dessert[$i]['name'].'</div>
                                <img class="photoplat" src="'.$result_dessert[$i]['image'].'" alt="'.$result_dessert[$i]['name'].'" style="width: 110px; height: 110px;" />
                            </div>
                                
                            <div class="card-back">
                                <div class="lcarte">
                                <!--Face arrière de la carte -->
                                    Ingrédients :<br />
                                    '.$result_dessert[$i]['recipe'].'
                                </div>
                            </div> 
                        </div> <!--Fin carte -->';
                    }
                ?>
            </fieldset>

            <br />
            <br />

            <!-----------NOS BOISSONS-------------->
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-boisson">
                <legend>Our Drinks</legend>
                <?php
                    for ($i=0;$i<count($result_boisson);$i++) {
                        echo '
                        <div class="recette">
                            <!-- Debut carte -->
                            <div class="card-front">
                                <!--Face avant de la carte -->
                                <div>'.$result_boisson[$i]['name'].'</div>
                                <img class="photoplat" src="'.$result_boisson[$i]['image'].'" alt="'.$result_boisson[$i]['name'].'" style="width: 110px; height: 110px;" />
                            </div>
                                
                            <div class="card-back">
                                <div class="lcarte">
                                <!--Face arrière de la carte -->
                                    Lists :<br />
                                    '.$result_boisson[$i]['recipe'].'
                                </div>
                            </div> 
                        </div> <!--Fin carte -->';
                    }
                ?>
            </fieldset>
        </div>

        <br />
        <br />

        <div class="conteneur_collab">
            <?php
                $date_actuelle = date("l"); // Donne le jour en entier, exemple pour mercredi on a "Wednesday"

                $num_plat_jour = (int)date("d")%count($result_plat); // On récupére un numéro aléatoire
                $plat_jour = $result_plat[$num_plat_jour]; // On choisi le plat du jour avec le num calculer précédement
                
                if ($date_actuelle == "Dimanche") { // Si dimanche pas de plat du jours car restaurant fermé
                    echo "Today we are $date_actuelle and grandma is sleeping, no meal of the day ";
                }
                else { // Sinon on affiche le plat du jour
                    echo "Today we are $date_actuelle, and grandma advise you : ".$plat_jour['name']."<br><img src='".$plat_jour['image']."' alt='plat du jour' style='width : 15%; height : 15%'>";
                }
            ?>
        </div>

    </main>

    <footer>
        <div id="footer">
            <div class="contact">
                <p class="foot">Contact us</p>
                <p>Phone : +33 3 16 14 23 XX</p>
                <p>Mail : ChtiteMamie@gmail.com</p>
            </div>

            <div class="carte">
                <p class="foot">Our location :</p>
                <div id="rectanglecarte">
                    <!--code permetant l'affichage d'une map avec un emplacement-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.5773028165336!2d2.430749075747542!3d50.968518971695794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf360f6b0d15b%3A0x1fde110afbf3f137!2sBergues!5e0!3m2!1sfr!2sfr!4v1702378398429!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="reseaux">
                <p class="foot">Social Networks :</p>
                <!--permet de d'afficher des images qui servent aussi de lien-->
                <div class="conteneur-image">
                    <a href="https://twitter.com/LachtiteMami" class="lien-image" target="_blank"><img src="../images/twitter.png" alt="logo twitter"></a>
                    <a href="https://www.instagram.com/la_chtite_mamie" class="lien-image" target="_blank"><img src="../images/instagram.png" alt="logo insta"></a>
                    <a href="http://facebook.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/facebook.png" alt="logo facebook"></a>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>
