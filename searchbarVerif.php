<?php

include_once "classes/voyage.php";
// include_once "classes/categorie.php";
    
if (!empty($_GET["filter"])) {

    $filter = ($_GET["filter"]);
    $newVoyage= new Voyage() ;
    $voyages = $newVoyage->getInfosFromLieu($filter) ;

    foreach ($voyages as $voyage) {
        include "templates/templateVoyageAdd.php";
   }

}else if (!empty($_GET["filterCat"]) && empty($_GET["filter"])) {

    $filterCat = $_GET["filterCat"];
    // echo $filterCat ;
    $newVoyage = new Voyage();
    $voyages = $newVoyage-> getInfosFromCategorie($filterCat);

    foreach ($voyages as $voyage) {
        include "templates/templateVoyageAdd.php";
    }
   
}else{
    
    $newVoyage= new Voyage() ;
    $voyages = $newVoyage->getAllVoyages();

    foreach ($voyages as $voyage) {
        include "templates/templateVoyageAdd.php";
    }
}





?>