<?php

include "voyage.php";

//suppression d'un voyage ;
    $removeId = isset($_GET["removedId"]);
    if($removeId){

        $id_voyage = $_GET["removedId"];

        $voyageRemoved = new Voyage;
        $voyageRemoved->removeVoyage($id_voyage) ;
        header("Location:adminpage.php");
        $_SESSION["removedId"] = "Voyage supprimé avec succes !";
        
    }

?>