<?php
    session_start();
    //si le button ajouter,modifier ou supprimer est cliqué ;
    $validateButton = isset($_POST["validateButton"]);

    //classe voyage
    include "voyage.php";
    
    $selectCategorie = $_POST["selectCategorie"];
    $selectFormule = $_POST["selectFormule"] ;
    $dateDebut = $_POST["dateDebut"] ;
    $dateFin = $_POST["dateFin"] ;
    $hebergementInput = $_POST["hebergementInput"] ;
    $lieuInput = $_POST["lieuInput"] ;
    $tarifInput = $_POST["tarifInput"] ;
    $imageVoyage = $_POST["imageVoyage"] ;
    $descriptionInput = $_POST["descriptionInput"] ;

    //ajoute d'un voyage ;
    if ($validateButton) { 

        $voyageAdded = new Voyage() ; 

        $voyageAdded->addVoyage($selectCategorie,$selectFormule,$lieuInput,$descriptionInput,$hebergementInput,$imageVoyage,$dateDebut,$dateFin,$tarifInput);
        header("Location:adminpage.php"); 

        //session ouverte pour afficher un message de reussite à adminpage.php ;
        $_SESSION["validateButton"] = "OPERATION REUSSITE !";
    }

?>