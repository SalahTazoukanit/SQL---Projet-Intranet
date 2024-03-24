<?php
    include "voyage.php";

    $editBtn = isset($_POST["editBtn"]) ;

   

    $editId = $_GET["updateId"];

    if ($editBtn) {

        $selectCategorie = $_POST["selectCategorie"];
        $selectFormule = $_POST["selectFormule"] ;
        $dateDebut = $_POST["dateDebut"] ;
        $dateFin = $_POST["dateFin"] ;
        $hebergementInput = $_POST["hebergementInput"] ;
        $lieuInput = $_POST["lieuInput"] ;
        $tarifInput = $_POST["tarifInput"] ;
        $imageVoyage = $_POST["imageVoyage"] ;
        $descriptionInput = $_POST["descriptionInput"] ;

        $voyageEdit = new Voyage();
        $voyageEdit->editVoyage($editId,$selectCategorie,$selectFormule,$lieuInput, $descriptionInput ,$hebergementInput,$imageVoyage,$dateDebut,$dateFin,$tarifInput);
        header("Location:adminpage.php");

    }
?>