<?php
    include_once 'setting.php';
    
    // if ($accueil == false || !isset($accueil)) {
    //     header('location:accueil.php');
    // }
?>
	
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="author" content="Jérémie Marcant, Théo Neveu, Alexis Evin, Adam Pavy">
    <meta name="keywords" content="Restaurant, Mamie, Ch'tite Mamie, Menu">
    <meta name="description" content="Menu de la ch'tite mamie">

    <link rel="icon" type="image/x-icon" href="../images/mamie-Logo.png">
    <link rel="stylesheet" type="text/css" href="../css/stylesheets.css">

</head>

<body>

    <header>

        <a href="../pages_php/accueil.php" class="lien-interne image-accueil"><img src="../images/mamie-Logo.png" alt="Logo du restaurant" style="display: inline; width: 75px; height: 75px"></a>
        <p style="display:inline;">Ch'tite mamie</p>

    </header>

    <nav>

        <div class="conteneur-nav">
            <a href="../pages_php/accueil.php" class="lien-interne" id="paccueil">Accueil</a>
            <a href="../pages_php/menu.php" class="lien-interne" id="pmenu"><b><u>Menu</u></b></a>
            <a href="../pages_php/menu_eng.php" class="lien-interne" id="panglais"><b><u>FRA</u></b>/ENG</a>
            <a href="../pages_php/reservation.php" class="lien-interne" id="preservation">Réservation</a>
            <a href="../pages_php/collab.php" class="lien-interne" id="pcollab">Partenaires</a>
        </div>

    </nav>
    
    <main>
        <div id="liste-menu">
            <h1 id="titre">Menu de la ch'ti mamie</h1>
            
            <ul class="entrees"><!--liste non ordonées pour les entrées-->
                <li> Entrées :</li>
                <li>Salade</li>
                <li>Quiche Aux Poireaux</li>
                <li>Oeufs Cocottes Maroilles</li>
                <li>Chicons A la Béchamel</li>
            </ul>
            <ul class="plats"><!--liste non ordonées pour les plat-->
                <li> Plats :</li>
                <li>Potjevleesch</li>
                <li>Fricadelle</li>
                <li>Américain</li>
                <li>Frites</li>
                <li>Moules aux Maroille</li>
                <li>Carbonnade Flamande</li>
                <li>Welsh</li>
            </ul>
            <ul class="desserts"><!--liste non ordonées pour les desserts-->
                <li> Désserts :</li>
                <li>Le Chtiramisu</li>
                <li>La Tarte Au Sucre</li>
                <li>Café Liégeois</li>
                <li>Crème Brûlée A La Chicorée</li>
                <li>Café Gourmand</li>
                <li></li>
            </ul>
            <ul class="boissons"><!--liste non ordonées pour les boissons-->
                <li> Boissons :</li>
                <li>Soft</li>
                <li>Bière</li>
                <li>Digestifs</li>
                <li>Vins</li>
            </ul>
            <h3 class="chut">Toute intoxication liée de près ou de loin à notre nourriture sera déclinée</h3>
            <!--texte caché en fin de page garce a la class chute-->
        </div>

        <br />

       

               <!--==========NOS ENTREES==================-->
        
        <?php
        $reqPrep="SELECT * FROM chtitemamie_bd WHERE Id=?";//La requere SQL SELECT
        $req = $conn->prepare($reqPrep);//Préparer la requete
        $req->execute([1]);//Executer la requete
        $result = $req->fetch(PDO::FETCH_ASSOC);//récupérer le résultat
        ?>

        <div id="liste-plats">
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-entree">
                <legend>Nos Entrées</legend>   <!--Legende de chaque partie (ici les entrées) -->
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <?php echo
                        '<!--Face avant de la carte -->
                        <div>Salade césar</div>
                        <img class="photoplat" src=$result[image] alt="salde-cesar" style="width: 110px; height: 110px;" /><!--Ne pas modifier les valeurs de taille -->
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Salade<br />
                            Mozzarella<br />
                            Poulet<br />
                        </div>'
                        ?>
                    </div>   <!--Fin face arriere de la carte -->
                </div>   <!--Fin d'une carte -->
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Quiche Aux Poireaux</div>
                        <img class="photoplat" src="../images/Plats/Quiche.jpeg" alt="quiche-poireaux" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Oeuf<br />
                            Poireaux<br />
                            Gruyère<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>   <!--Fin d'une carte -->
                <div class="recette">
                    <div class="card-front">
                        <div>Oeufs Cocottes Maroilles</div>
                        <img class="photoplat" src="../images/Plats/Oeuf-Cocotte-Maroille.jpeg" alt="cocotte-maroille" style="width: 110px; height: 110px;" />
                    </div>
                    <div class="card-back">
                        <div class="lcarte">
                            Ingrédients :<br />
                            Oeuf<br />
                            Maroille<br />
                            Crème<br />
                        </div>
                    </div>
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Chicons à la Béchamel</div>
                        <img class="photoplat" src="../images/Plats/Chicon-Bechamel.jpeg" alt="chicon-bechamel" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Chicon<br />
                            Béchamel<br />
                            Jambon<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
            </fieldset>
            <!--Fin de la liste des cartes des recettes -->

            <br />
            <br />

            <!-----------NOS PLATS-------------->

        
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-plat">
                <legend>Nos Plats</legend>   <!--Legende de chaque partie (ici les entrées) -->
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Potjevleesch</div>
                        <img class="photoplat" src="../images/Plats/Potjevleesch.jpeg" alt="potjevleesch" style="width: 110px; height: 110px;" /><!--Ne pas modifier les valeurs de taille -->
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Poulet<br />
                            Lapin<br />
                            Veau<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>   <!--Fin d'une carte -->
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Fricadelle</div>
                        <img class="photoplat" src="../images/Plats/Fricadelle.jpeg" alt="fricadelle" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Ca, c'est le secret de mamie
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>   <!--Fin d'une carte -->
                <div class="recette">
                    <div class="card-front">
                        <div>Américain</div>
                        <img class="photoplat" src="../images/Plats/Americain.jpeg" alt="americain" style="width: 110px; height: 110px;" />
                    </div>
                    <div class="card-back">
                        <div class="lcarte">
                            Ingrédients :<br />
                            Frite<br />
                            Sauce au choix<br />
                            Saucisse, Merguez ou Fricadelle<br />
                        </div>
                    </div>
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Frites</div>
                        <img class="photoplat" src="../images/Plats/Frites.jpeg" alt="frites" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Pommes de Terre<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Moules de Mamie</div>
                        <img class="photoplat" src="../images/Plats/Moules.jpeg" alt="moules" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Moules<br />
                            Maroille<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Carbonade Flamande</div>
                        <img class="photoplat" src="../images/Plats/Carbonade-Flamande.jpeg" alt="carbonade flamande" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Lard Fumé<br />
                            Beauf<br />
                            Carotte<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Welsh</div>
                        <img class="photoplat" src="../images/Plats/Welsh.jpeg" alt="welsh" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Oeuf<br />
                            Jambon<br />
                            Cheddar<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
            </fieldset>
        

            <br />
            <br />

            <!-----------NOS DESSERTS-------------->

            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-dessert">
                <legend>Nos Desserts</legend>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Chtiramisu</div>
                        <img class="photoplat" src="../images/Plats/Tiramisu.jpeg" alt="tiramisu" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Speculos<br />
                            Café<br />
                            Cacao<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Tarte au Sucre</div>
                        <img class="photoplat" src="../images/Plats/Tarte-Sucre.jpg" alt="tarte au sucre" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Du Sucre<br />
                            Du Sucre<br />
                            Et encore du sucre<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Café Liégeois</div>
                        <img class="photoplat" src="../images/Plats/Cafe-Liegeois.jpg" alt="café liégeois" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Café<br />
                            Vanille<br />
                            Crème Fouettée<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Crème Brulée à la Chicorée</div>
                        <img class="photoplat" src="../images/Plats/Creme-Brulee.jpg" alt="crème brulée à la chicorée" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Chicorée<br />
                            Vanille<br />
                            Crème<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Café Gourmand</div>
                        <img class="photoplat" src="../images/Plats/Cafe-Gourmand.jpg" alt="café gourmand" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingrédients :<br />
                            Café<br />
                            Desserts du jour<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
            </fieldset>
            
            <br />
            <br />

                <!-----------NOS BOISSONS-------------->

        
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-boisson">
                <legend>Nos Boissons</legend>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Soft</div>
                        <img class="photoplat" src="../images/Plats/Soft.jpg" alt="boisson soft" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Liste des Soft :<br />
                            Eau , Perrier , Coca<br />
                            Diabolo , Oasis , Fanta , Ice Tea<br />
                            Schweppes <br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Bières</div>
                        <img class="photoplat" src="../images/Plats/Biere.jpg" alt="bère" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Liste des bières :<br />
                            Goulade , Anosteke , Cuvé des Trolls<br />
                            Paix Dieux , Grimbergen , Bush<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Digestifs</div>
                        <img class="photoplat" src="../images/Plats/Digestif.jpg" alt="dingestif" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Liste des digestifs :<br />
                            Get 27/31 , Vodka Citron/Fraise<br />
                            Rhum , Digestif Maison
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Vins</div>
                        <img class="photoplat" src="../images/Plats/Vin.jpg" alt="Vin" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Liste des vins :<br />
                            Vin Rouge : Bordeaux , Côte du Rhône<br />
                            Vin Blanc : Grand Cru , Chardonnay<br />
                            Rosé : Côte de Provence , Argali Rosé<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
            </fieldset>
        </div>

        <br />
        <br />

        <div class="conteneur_collab">
            <?php
                $date_actuelle = date("l"); // Donne le jour en entier, exemple pour mercredi on a "Wednesday"

                switch ($date_actuelle) {
                    case "Monday" :
                        $date_actuelle = "Lundi";
                        break;
                    case "Thuesday" :
                        $date_actuelle = "Mardi";
                        break;
                    case "Wednesday" :
                        $date_actuelle = "Mercredi";
                        break;
                    case "Thursday" :
                        $date_actuelle = "Jeudi";
                        break;
                    case "Friday" :
                        $date_actuelle = "Vendredi";
                        break;
                    case "Saturday" :
                        $date_actuelle = "Samedi";
                        break;
                    case "Sunday" :
                        $date_actuelle = "Dimanche";
                        break;
                }
                
                if ($date_actuelle == "Dimanche") {
                    echo "Aujourd'hui nous sommes $date_actuelle et mamie se repose, donc pas de plat du jour ";
                }
                else {
                    echo "Aujourd'hui nous sommes $date_actuelle, et mamie vous connseille : ";
                }
            ?>
        </div>
    </main>

    <footer>
        <div id="footer">
        <div class="contact">
        <p class="foot">Nous contacter</p>
        <p>Téléphone : +33 3 16 14 23 XX</p>
        <p>Mail : ChtiteMamie@gmail.com</p>
        </div>

        <div class="carte">
        <p class="foot">Où nous trouver :</p>
        <div id="rectanglecarte">
        <!--code permetant l'affichage d'une map avec un emplacement-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.5773028165336!2d2.430749075747542!3d50.968518971695794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf360f6b0d15b%3A0x1fde110afbf3f137!2sBergues!5e0!3m2!1sfr!2sfr!4v1702378398429!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

        <div class="reseaux">
        <p class="foot">Nos Réseaux :</p>
        <!--permet de d'afficher des images qui servent aussi de lien-->
        <div class="conteneur-image">
            <a href="https://twitter.com/LachtiteMami" class="lien-image" target="_blank"><img src="../images/twitter.png" alt="logo twitter"></a>
            <a href="https://www.instagram.com/la_chtite_mamie" class="lien-image" target="_blank"><img src="../images/instagram.png" alt="logo insta"></a>
            <a href="http://facebook.com/ChtiteMamie" class="lien-image" target="_blank"><img src="../images/facebook.png" alt="logo facebook"></a>
        </div>
        </div>
        <a href="./cookies.php" id="cookies">Cookies d'utilisation</a>
        </div>

    </footer>

    <?php
    $conn = NULL; // On enlève la connexion à la base de donné
    ?>

</body>

</html>