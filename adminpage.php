<?php
//demarrage de la session ;
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Page</title>
</head>
<body>
    
    <?php
        include "header.php" ;
    ?>
    <?php
    //session ouverte dans verifAddEdit pour afficher un message operation reussite ;
        if (isset($_SESSION["validateButton"])):?> 
            <div class="message">
                <?php
                    echo $_SESSION["validateButton"];
                    unset($_SESSION["validateButton"]);
                ?>
            </div>
    <?php endif ?>
    <div class="containerAdminPage">
        <div class="dashboard">
            <div class="travelAddContainer">
                <h2>DASHBOARD</h2>
                <div><a href="formulaireAddEdit"><button class="buttonAdminPage"><i class="fa-solid fa-plus">Ajouter </i></button></a></div>
            </div>
            <div class="logoutContainer">
                <div class="line"></div>
                <a href="deconnexion.php"><i class="fa-solid fa-right-from-bracket" style="color: black;"> Deconnexion </i></a>
            </div>
        </div>
        <div class="containerVoyages">
        
        <?php
            include "voyage.php";
                $newVoyage = new Voyage ;

            foreach ($newVoyage->getAllVoyages() as $voyage) {
                include "templateVoyageAdd.php";
                echo $allVoyages ;
            }
        ?>
        </div>
        <div></div>
    </div>
</body>
</html>