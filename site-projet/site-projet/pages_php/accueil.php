<?php
    session_start();
    include_once 'setting.php';

    // Marque le passage de l'utilisateur par l'accueil
    $_SESSION['accueil']=true;
    $_SESSION["current_page"]="Accueil";
?>
	
<!DOCTYPE html>
<html lang="fr">

    <?php
    include "header.php";
    ?>

    <main><!--partie en charge du contenu principale de la page-->


        <div class="conteneur-accueil">
            <p style="text-decoration:underline;">A propos de nous</p><!--paragraphe avec le texte souligné-->
            <!--contenu textuel de la page-->
            <p>Bienvenue à "La Ch'tite Mamie" – l'endroit où la douceur des frites rencontre le goût du partage !</p>
            <br />
            <h3>La Ch'tite Mamie : Une Histoire de Saveurs et de Sourires</h3>
            <p>
                "La Ch'tite Mamie" se dresse comme un adresse à ne surtout pas louper, enveloppé de l'arôme irrésistible des frites fraîchement préparées.
                Derrière ce petit coin de paradis croustillant se trouve une femme exceptionnelle : la bien-aimée Mamie, gardienne du secret des frites parfaites.
            </p>
            <h3>La Douce Vie de Mamie</h3>
            <p>La Ch'tite Mamie, connue de tous pour son sourire chaleureux et sa passion pour la pomme de terre, a consacré sa vie à l'art de la frite. Née et élevée dans le nord de la France, elle a apporté avec elle le charme et le réconfort d'une cuisine traditionnelle imprégnée d'amour.</p>
            <p>Tout son art, elle l'a appris auprès du célèbre Jean-Paul, le roi de la frite du RCL depuis 50 ans. Elle a peaufiné sa recette secrète jour et nuit grâce à l'aide de son tuteur Jean-Paul.</p>
            <center>
                <img src="../images/Baraque-Frite.jpg" alt="baraque à frite du stade bollaert" class="imgfriterie" />
            </center>
            <h3>Le Secret de la Ch'tite Mamie</h3>
            <p>Que serait "La Ch'tite Mamie" sans son secret bien gardé ? Mamie murmure à chaque frite tout l'amour qu'elle a accumulé pour la pomme de terre durant ces dernières années. Ce secret ancestral donne à chaque bouchée une explosion de saveurs, un mélange subtil de croustillant et de moelleux.</p>
            <h3>Au-Delà des Frites</h3>
            <p>Mais "La Ch'tite Mamie" offre bien plus que des frites exquises. C'est un lieu où les gens se réunissent, où les rires résonnent et où les histoires se partagent autour d'une portion généreuse. Mamie elle-même est une figure maternelle pour la communauté locale, toujours prête à offrir un sourire et une oreille attentive.</p>
            <h3>Venez, Savourez, Partagez</h3>
            <p>"La Ch'tite Mamie" n'est pas seulement une baraque à frites ; c'est un lieu où l'amour pour la frite et la communauté se rencontrent. Venez goûter à l'héritage de Mamie, laissez-vous envelopper par l'atmosphère chaleureuse, et faites partie de l'histoire délicieuse de "La Ch'tite Mamie". Venez, savourez, partagez l'amour, une frite à la fois. </p>
        </div>
        <div class="horaires">
            <img src="../images/carte.jpg" alt="carte des horaires" />
        </div>


    </main>

    <?php
    include "footer.php";
    ?>

</body>

</html>