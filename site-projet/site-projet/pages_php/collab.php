<?php
    session_start();
    include_once 'setting.php';
    
    if (!isset($_SESSION['accueil'])|| !$_SESSION['accueil']) { // Si l'utilisateur n'est pas passé par l'accueil on l'y renvoie
        header('location:accueil.php');
    }
    $_SESSION["current_page"]="Partenaires";
?>
	
<!DOCTYPE html>
<html lang="fr">

    <?php
    include "header.php";
    ?>

    <main>
        <!--début contenu de la page-->

        <h1><u>Nos Collaborateurs</u></h1><!--nom principale de la page-->

        <h2><u>Chez nous on mange local</u></h2><!--corps de présentation de nos collaborateurs-->
        <p>Nous sommes en partenariat avec divers éleveurs et producteurs de la région</p>
        <div class="conteneur_collab">
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Guillaume-->
                <img src="../images/Guillaume-Logo.png" alt="photo de Guillaume" class="photocollab">
                <br><strong>Guillaume</strong>
                <br>Agriculteur situé à quaëdypre
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de François-->
                <img src="../images/Francois-Logo.png" alt="photo de Francois" class="photocollab">
                <br><strong>François</strong>
                <br>Vigeron situé à Lievin
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Gerard-->
                <img src="../images/Gerard-Logo.png" alt="photo de Gerard" class="photocollab">
                <br><strong>Gérard</strong>
                <br>Maraicher situé à La Poissonnerie
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Didier-->
                <img src="../images/Didier-Logo.png" alt="photo de Didier" class="photocollab">
                <br><strong>Didier</strong>
                <br>Eleveur situé à Buire-le-Sec
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le personnage de Pierrick-->
                <img src="../images/Pierrick-Logo.png" alt="photo de Pierrick" class="photocollab">
                <br><strong>Pierrick</strong>
                <br>Brasseur situé à Ercheu
            </div>
        </div>

        <h2><u>Nos fournisseurs officiels</u></h2>
        <div class="conteneur_collab">
            <!--Conteneur div, contenant tout nos partenaires officiel, avec la même classe que le conteneur précédent-->
            <div class="element_collab">
                <!--image avec texte dans une division pour le partenaire : Goudale-->
                <img src="../images/goudale.png" alt="Logo Goudale" class="photocollab">
                <br><strong>La Goudale</strong>
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le partenaire : Coca-Cola-->
                <img src="../images/Coca-Cola-logo.png" alt="Logo Coca" class="photocollab">
                <br><strong>Coca-Cola</strong>
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour le partenaire : Heinz-->
                <img src="../images/Heinz-logo.png" alt="Logo Heinz" class="photocollab">
                <br><strong>Heinz</strong>
            </div>
        </div>

        <h2><u>Retrouvez-nous lors de vos évènement favoris</u></h2>
        <div class="conteneur_collab">
            <!--Conteneur div, contenant tout nos êvenement auquel on participe, avec la même classe que les conteneurs précédent-->
            <div class="element_collab">
                <!--image avec texte dans une division pour l'êvenement : Le tour de France-->
                <img src="../images/tour_de_france-logo.png" alt="Logo tour de france" class="photocollab">
                <br><strong>Le Tour de France</strong>
            </div>
            <div class="element_collab">
                <!--image avec texte dans une division pour l'êvenement : Les JO 2024-->
                <img src="../images/paris2024-logo.png" alt="Logo des JO de Paris 2024" class="photocollab">
                <br><strong>JO de Paris</strong>
            </div>
        </div>
    </main>

    <?php
    include "footer.php";
    ?>

</body>

</html>
