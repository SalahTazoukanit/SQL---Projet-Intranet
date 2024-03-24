<?php

include "bdd.php";


class Voyage {

    protected $id_categorie ;
    protected $id_formule ;
    protected $lieu ;
    protected $description ;
    protected $hebergement ;
    protected $image ;
    protected $date_debut ;
    protected $date_fin ;
    protected $tarif ;

    public function addVoyage($id_categorie,$id_formule,$lieu, $description ,$hebergement,$image,$date_debut,$date_fin,$tarif){
        //creation d'une istance ;
        $db = new BDD();

        //connection à la bdd ;
        $db->connectionBdd();

        //ajout des valeurs dans la table voyage ;
        //this->connexion de db ;
        $std = $db->connection->query("INSERT INTO voyage (id_categorie,id_formule,lieu,description,hebergement,image,date_debut,date_fin,tarif) VALUES ('$id_categorie' ,'$id_formule' ,'$lieu',' $description' ,'$hebergement','$image','$date_debut','$date_fin','$tarif')");
        // $std->execute(); 

        //deconnexion de la base de donnée ;
        $db->deconnectionBdd();
    }

    public function getAllVoyages($id_categorie,$id_formule,$lieu, $description ,$hebergement,$image,$date_debut,$date_fin,$tarif){

        $db = new BDD();
        $db->connectionBdd();

        $std = $db->connection->prepare("SELECT * FROM voyage");
        $std->execute();
        $voyages = $std->fetchAll();

        $db->deconnectionBdd();

        return $voyages;
    }

    public function removeVoyage($id_categorie,$id_formule,$lieu, $description ,$hebergement,$image,$date_debut,$date_fin,$tarif){

        $db = new BDD();
        $db->connectionBdd();

        $std = $db->connection->prepare("DELETE FROM voyage WHERE id_voyage=1");
        $std->execute();

        $db->deconnectionBdd();
    }

    public function editVoyage($id_categorie,$id_formule,$lieu, $description ,$hebergement,$image,$date_debut,$date_fin,$tarif,$id_voyage){

        $db = new BDD();
        $db->connectionBdd();

        $std = $db->connection->query("UPDATE voyage SET `id_categorie`= $id_categorie ,`id_formule`= $id_formule ,`lieu`= '$lieu',`description`= '$description',`hebergement`= $hebergement ,`image`= '$image' ,`date_debut`= $date_debut ,`date_fin`= $date_fin ,`tarif`='$tarif' WHERE id_voyage = $id_voyage");

        // $std->execute(array("baubau.png", 75));

        $db->deconnectionBdd();
    }

    // UPDATE `voyage` SET `id_categorie`=2,`id_formule`=2,`lieu`= 'casablanca',`description`= 'blabla',`hebergement`= 3 ,`image`= 'miao' ,`date_debut`='[value-8]',`date_fin`='[value-9]',`tarif`='99' WHERE id_voyage = 2;
}



?>