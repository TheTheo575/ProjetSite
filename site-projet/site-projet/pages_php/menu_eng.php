<?php
    include_once 'setting.php';
    include_once 'accueil.php';
    include_once 'accueil_eng.php';
    
    if ($accueil == false || !isset($accueil)) {
        header('location:accueil_eng.php');
    }
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
                <li>Salad</li>
                <li>Leek Quiche</li>
                <li>Eggs Cocottes Maroilles</li>
                <li>Chicons with Béchamel</li>
            </ul>
            <ul class="plats">
                <li>Our Dishes:</li>
                <li>Potjevleesch</li>
                <li>Fricadelle</li>
                <li>American</li>
                <li>French fries</li>
                <li>Mussels with Maroille</li>
                <li>Flemish Carbonnade</li>
                <li>Welsh</li>
            </ul>
            <ul class="desserts">
                <li>Our Desserts:</li>
                <li>The Chtiramisu</li>
                <li>The Sugar Pie</li>
                <li>Café Liégeois</li>
                <li>Chicorrée Creme Brulee</li>
                <li>Gourmet Coffee</li>
            </ul>
            <ul class="boissons">
                <li>Drinks:</li>
                <li>Soft</li>
                <li>Beer</li>
                <li>Digestive</li>
                <li>Wines</li>
            </ul>
            <h3 class="chut">Any poisoning directly or indirectly linked to our food will be declined.</h3>
        </div>

        <br />

        <!-----------NOS ENTREES-------------->

        <div id="liste-plats">
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-entree">
                <legend>Our Starters</legend>   <!--Legende de chaque partie (ici les entrées) -->
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Cesar Salad</div>
                        <img class="photoplat" src="../images/Plats/salade-cesar.jpeg" alt="cesar salad" style="width: 110px; height: 110px;" /><!--Ne pas modifier les valeurs de taille -->
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Salad<br />
                            Mozzarella<br />
                            Chiken<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>   <!--Fin d'une carte -->
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Leeks Quiche</div>
                        <img class="photoplat" src="../images/Plats/Quiche.jpeg" alt="leeks quiche" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Egg<br />
                            Leeks<br />
                            Gruyere<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>   <!--Fin d'une carte -->
                <div class="recette">
                    <div class="card-front">
                        <div>Eggs Cocottes Maroilles</div>
                        <img class="photoplat" src="../images/Plats/Oeuf-Cocotte-Maroille.jpeg" alt="cocotte-maroille" style="width: 110px; height: 110px;" />
                    </div>
                    <div class="card-back">
                        <div class="lcarte">
                            Ingredient :<br />
                            Egg<br />
                            Maroille<br />
                            Cream<br />
                        </div>
                    </div>
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Bechamel Chicon</div>
                        <img class="photoplat" src="../images/Plats/Chicon-Bechamel.jpeg" alt="bechamel chicon" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Chicon<br />
                            Bechamel<br />
                            Ham<br />
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
                <legend>Our Dishies</legend>   <!--Legende de chaque partie (ici les entrées) -->
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
                            Ingredient :<br />
                            Chiken<br />
                            Bunny<br />
                            Calf<br />
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
                            Ingredient :<br />
                            Secret Ingredients
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>   <!--Fin d'une carte -->
                <div class="recette">
                    <div class="card-front">
                        <div>American</div>
                        <img class="photoplat" src="../images/Plats/Americain.jpeg" alt="american" style="width: 110px; height: 110px;" />
                    </div>
                    <div class="card-back">
                        <div class="lcarte">
                            Ingredient :<br />
                            French Fries<br />
                            Sauce of your choice<br />
                            Sausage, Merguez or Fricadelle<br />
                        </div>
                    </div>
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>French Fries</div>
                        <img class="photoplat" src="../images/Plats/Frites.jpeg" alt="french fries" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Potato<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Sea ​​Mussels</div>
                        <img class="photoplat" src="../images/Plats/Moules.jpeg" alt="sea mussels" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Sea Mussel<br />
                            Maroille<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Flemish Carbonnade</div>
                        <img class="photoplat" src="../images/Plats/Carbonade-Flamande.jpeg" alt="flemish carbonnade" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Smoked Bacon<br />
                            Beauf<br />
                            Carrot<br />
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
                            Ingredient :<br />
                            Egg<br />
                            Ham<br />
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
                <legend>Our Desserts</legend>
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
                            Ingredient :<br />
                            Speculos<br />
                            Coffe<br />
                            Cocoa<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Sugar Pie</div>
                        <img class="photoplat" src="../images/Plats/Tarte-Sucre.jpg" alt="sugar pie" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Sugar<br />
                            Sugar<br />
                            And Sugar Again<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Liegeois Coffe</div>
                        <img class="photoplat" src="../images/Plats/Cafe-Liegeois.jpg" alt="liegeois coffe" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Coffe<br />
                            Vanilla<br />
                            Whipped Cream<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Chicorrée Creme Brulee</div>
                        <img class="photoplat" src="../images/Plats/Creme-Brulee.jpg" alt="chicorrée creme brulee" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Chicorée<br />
                            Vanilla<br />
                            Cream<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Gourmet Coffee</div>
                        <img class="photoplat" src="../images/Plats/Cafe-Gourmand.jpg" alt="Gourmet Coffee" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Ingredient :<br />
                            Coffe<br />
                            Desserts of the day<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
            </fieldset>

            <br />
            <br />

            <!-----------NOS BOISSONS-------------->
            <!--Debut de la liste des cartes des recettes -->
            <fieldset id="liste-recette-boisson">
                <legend>Our Drinks</legend>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Soft</div>
                        <img class="photoplat" src="../images/Plats/Soft.jpg" alt="soft drink" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Soft List:<br />
                            Water , Sparkling Water , Cola<br />
                            Diabolo , Oasis , Fanta , Ice Tea<br />
                            Schweppes<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Beer</div>
                        <img class="photoplat" src="../images/Plats/Biere.jpg" alt="beer" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Beer List :<br />
                            Goulade , Anosteke , Cuvé des Trolls<br />
                            Paix Dieux , Grimbergen , Bush<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Digestive</div>
                        <img class="photoplat" src="../images/Plats/Digestif.jpg" alt="dingestive" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Digestive List :<br />
                            Get 27/31 , Vodka Lemon/Strberry<br />
                            Rhum , Digestif Maison
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
                <div class="recette">
                    <!-- Debut d'une carte -->
                    <div class="card-front">
                        <!--Face avant de la carte -->
                        <div>Wines</div>
                        <img class="photoplat" src="../images/Plats/Vin.jpg" alt="Wine" style="width: 110px; height: 110px;" />
                    </div>   <!--Fin face avant de la carte -->
                    <div class="card-back">
                        <!--Face arriere de la carte -->
                        <div class="lcarte">
                            Wines List :<br />
                            Red Wine : Bordeaux , Côte du Rhône<br />
                            White Wine : Grand Cru , Chardonnay<br />
                            Rosé : Côte de Provence , Argali Rosé<br />
                        </div>
                    </div>   <!--Fin face arriere de la carte -->
                </div>
            </fieldset>
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
