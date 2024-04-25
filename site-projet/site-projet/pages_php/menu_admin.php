<?php
    session_start();
    include_once 'setting.php';

    // Marque le passage de l'utilisateur par l'accueil
    // $_SESSION['accueil']=true;

    if ($_SESSION['admin'] == false) { // Vérification si l'utilisateur est bien admin
        header('location:accueil.php');
    }
    $_SESSION["current_page"]="Menu_admin";

    // Partie formulaire

    // Supprimer formulaire
    if (isset($_POST['Soumettre_supprimer_plat'])) {

        // Partie SQL avec DELETE
        $reqSQL = "DELETE FROM plats WHERE Id=?"; // on définit la commande sql utilisé
        $req = $conn->prepare($reqSQL); // Préparation de la requête
        $req->execute(array($_POST['supprimer_plat'])); // On execute la requête avec l'id du plat à supprimer
    }

    // Ajouter formulaire
    if (isset($_POST['Soumettre_ajouter_plat'])) {

        // définition des variables
        $nom = $_POST['nom_plat'];
        $name = $_POST['name_plat'];
        $ingredient = $_POST['ingredient_plat'];
        $recipe = $_POST['decipe_plat'];
        $photo = $_POST['image'];
        $type_plat = $_POST['type_plat'];

        // Partie SQL avec INSERT
        $reqSQL = "INSERT INTO plats VALUES (NULL, ?, ?, ?, ?, ?, ?)";
        $req = $conn->prepare($reqSQL);
        $req->execute(array($nom, $name, $ingredient, $recipe, $photo, $type_plat));
    }

    // Modifier formulaire
    if (isset($_POST['Soumettre_modifier_plat'])) {

        // définition des variables
        $ids = $_POST['id'];
        $nom = $_POST['nom_plat'];
        $name = $_POST['name_plat'];
        $ingredient = $_POST['ingredient_plat'];
        $recipe = $_POST['decipe_plat'];
        $photo = $_POST['image'];
        $type_plat = $_POST['type_plat'];

        // Partie SQL avec Update
        $reqSQL = "UPDATE plats SET nom=?, name=?, recette=?, recipe=?, image=?, type=? WHERE Id=?";
        $req = $conn->prepare($reqSQL);
        $req->execute(array($nom, $name, $ingredient, $recipe, $photo, $type_plat, $ids));
    }
?>
	
<!DOCTYPE html>
<html lang="fr">

    <?php
    include "header.php";
    ?>

    <main><!--partie en charge du contenu principale de la page-->

        <div class='formreserv'>
                <form method='post' action='menu_admin.php'>
                    <fieldset>
                        <legend>Commande plat</legend>
                        <select name='commande_plat' required>
                            <option value='ajouter_plat'>Ajouter</option>
                            <option value='supprimer_plat'>Supprimer</option>
                            <option value='modifier_plat'>Modifier</option>
                        </select>
                        <br><br>
                        <input type='submit' value='valider' id='reservation' name='Soumettre_commande_plat'>
                </fieldset>
            </form>
         </div>

         <br><br>

         <?php

         if (isset($_POST['Soumettre_commande_plat'])) {
            if ($_POST['commande_plat'] == 'supprimer_plat') {
                // Récupération des informations par rapports aux plats
                $reqSQL = "SELECT * FROM plats";
                $req = $conn->prepare($reqSQL);
                $req->execute();

                $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

                // Formulaire pour savoir quel aliment sera supprimer, en récupérant son Id
                echo "
                <div class='formreserv'>
                    <form method='post' action='menu_admin.php'>
                        <fieldset>
                            <legend>Supprimer plat</legend>
                            <select name='supprimer_plat' required>";

                            for ($i = 0; $i < count($resultat); $i++) { // On met comme value l'id pour la récupérer
                                echo "<option value='".$resultat[$i]['Id']."'>".$resultat[$i]['nom']."</option>";
                            }
                echo"
                            </select>
                            <br><br>
                            <input type='submit' value='valider' id='reservation' name='Soumettre_supprimer_plat'>
                        </fieldset>
                    </form>
                </div>";
            }
            if ($_POST['commande_plat'] == 'ajouter_plat') { // Formulaire pour obtenir les informations à ajouter dans les plats
                ?>
                <div class='formreserv'>
                    <form method='post' action='menu_admin.php' entype='multipart/form-data'>
                        <fieldset>
                            <legend>Ajout plat</legend>
                            <label >Nom :</label>
                            <input type='text' name='nom_plat'  placeholder='Entrez le nom du plat' required/>
                            <br><br>
                            <label >Nom en anglais :</label>
                            <input type='text' name='name_plat'  placeholder='Entrez le nom du plat en anglais' required/>
                            <br><br>
                            <label >Description :</label>
                            <input type='text' name='ingredient_plat'  placeholder='Entrez ses ingrédients (pensez à mettre br pour séparer)' required/>
                            <br><br>
                            <label >Description en anglais :</label>
                            <input type='text' name='decipe_plat'  placeholder='Entrez ses ingrédients en anglais (pensez à mettre br pour séparer)' required/>
                            <br><br>
                            <label >Type de plat :</label>
                            <select name='type_plat' required>
                                <option value='entree'>Entree</option>
                                <option value='plat'>Plat</option>
                                <option value='dessert'>Dessert</option>
                                <option value='boisson'>Boisson</option>
                            </select>
                            <br><br>
                            <label >Image :</label>
                            <input type='text' name='image'  placeholder='Chemin du fichier' required/>
                            <br><br>
                            <input type='submit' value='valider' id='reservation' name='Soumettre_ajouter_plat'>
                        </fieldset>
                    </form>
                </div>
                <?php
            }
            if ($_POST['commande_plat'] == 'modifier_plat') {

                // On récupere les informations des plats
                $reqSQL = "SELECT * FROM plats";
                $req = $conn->prepare($reqSQL);
                $req->execute();

                $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class='formreserv'>
                    <form method='post' action='menu_admin.php'> <!-- formulaire pour savoir quel plat on modifie, en récupérant son id -->
                        <fieldset>
                            <legend>Modifier plat</legend>
                            <select name='modifier_plat' required>";

                            <?php
                            for ($i = 0; $i < count($resultat); $i++) {
                                echo "<option value='".$resultat[$i]['Id']."'>".$resultat[$i]['nom']."</option>";
                            }
                            ?>
                            </select>
                            <br><br>
                            <input type='submit' value='modifier' id='reservation' name='choix_plat_modifier'>
                        </fieldset>
                    </form>
                </div>

                <?php
            }
         }
         ?>

        <?php
        // Quand on a l'id du plat a modifier
        if (isset($_POST['choix_plat_modifier'])) {

            // On récupére toute les informations par rapport au plat en question
            $plat_modif_id = $_POST['modifier_plat'];

            $reqSQL = "SELECT * FROM plats WHERE Id=?";
            $req = $conn->prepare($reqSQL);
            $req->execute(array($plat_modif_id));
            $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

            // On affiche les données dans un formulaire, pour que l'utilisateur puisse les modifiers. 
            // Ensuite on récupérera toutes ces informations comme dans la partie ajouter un plat
            echo "
            <div class='formreserv'>
                <form method='post' action='menu_admin.php'>
                    <fieldset>
                        <legend>Modifier plat</legend>
                        <input type='hidden' id='id' name='id' value='".$plat_modif_id."'>
                        <label >Nom :</label>
                        <input type='text' name='nom_plat' value='".$resultat[0]['nom']."' required/>
                        <br><br>
                        <label >Nom en anglais :</label>
                        <input type='text' name='name_plat' value='".$resultat[0]['name']."' required/>
                        <br><br>
                        <label >Description :</label>
                        <input type='text' name='ingredient_plat' value='".$resultat[0]['recette']."' required/>
                        <br><br>
                        <label >Description en anglais :</label>
                        <input type='text' name='decipe_plat' value='".$resultat[0]['recipe']."' required/>
                        <br><br>
                        <label >Type de plat :</label>
                        <select name='type_plat' required>
                            <option value='entree'>Entree</option>
                            <option value='plat'>Plat</option>
                            <option value='dessert'>Dessert</option>
                            <option value='boisson'>Boisson</option>
                        </select>
                        <br><br>
                        <label >Image :</label>
                        <input type='text' name='image' value='".$resultat[0]['image']."' required/>
                        <br><br>
                        <input type='submit' value='valider' id='reservation' name='Soumettre_modifier_plat'>
                    <fieldset>
                </form>
            </div>
            ";
        }
        ?>


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
    $conn = NULL;
    ?>

</body>

</html>