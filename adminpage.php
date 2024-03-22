<?php
//demarrage de la session ;
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Page</title>
</head>
<body>
    <?php
    include "header.php" ;
        ?>
    <div class="containerAdminPage">
        <div class="dashboard">
            <div class="travelAddContainer">
                <div>Voyages</div>
                <div>Ajouter</div>
            </div>
            <div class="logoutContainer">
                <div>Aide</div>
                <div><a href="index.php">Déconnexion</a></div>
            </div>
        </div>
        <div class="containerVoyages">
            <div class="voyageInfo">
                <img src="./images/maroc.jpg" alt="maroc image">
                <div class="infos">
                    <h3>Maroc</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta placeat asperiores quas fugit doloremque, illum cum neque a porro corrupti quaerat hic voluptas voluptates maiores assumenda obcaecati. Rerum pariatur hic blanditiis quod libero deserunt iusto?</p>
                    <p>date de debut : </p>
                    <p>date de fin : </p>
                    <p>formule</p>
                    <p>hebergement</p>
                    <p>tarif</p>
                </div>
            </div>
            <div class="voyageInfo">
                <img src="./images/maroc.jpg" alt="maroc image">
                <div class="infos">
                    <h3>Maroc</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt unde quis autem blanditiis quos voluptatum.</p>
                    <p>date de debut : </p>
                    <p>date de fin : </p>
                    <p>formule</p>
                    <p>hebergement</p>
                    <p>tarif</p>
                </div>
            </div>
            <div class="voyageInfo">
                <img src="./images/maroc.jpg" alt="maroc image">
                <div class="infos">
                    <h3>Maroc</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt unde quis autem blanditiis quos voluptatum.</p>
                    <p>date de debut : </p>
                    <p>date de fin : </p>
                    <p>formule</p>
                    <p>hebergement</p>
                    <p>tarif</p>
                </div>
            </div>
        </div>
        <div></div>
    </div>
</body>
</html>