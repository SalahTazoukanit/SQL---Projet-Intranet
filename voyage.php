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

    public function addVoyage(){
        //creation d'une istance ;
        $db = new BDD();
        //connection à la bdd ;
        $db->connectionBdd();
        //ajout des valeurs dans la table voyage ;
        //this->connexion de db ;
        $std = $db->connection->query("INSERT INTO voyage (id_categorie,id_formule,lieu,description,hebergement,image,date_debut,date_fin,tarif) VALUES (1,2,'paris','blabla','blabla','blabla.png','2024-06-12','2024-06-12',25)");
        $std->execute(); 
        //deconnexion de la base de donnée ;
        $db->deconnectionBdd();
    }
    public function removeVoyage(){

        $db = new BDD();
        $db->connectionBdd();

        $std = $db->connection->prepare("DELETE FROM voyage WHERE id_voyage=1");
        $std->execute();

        $db->deconnectionBdd();
    }
    public function editVoyage(){

        $db = new BDD();
        $db->connectionBdd();

        $std = $db->connection->prepare("UPDATE voyage SET  image =? , tarif =? WHERE id_voyage = 2");
        $std->execute(array("baubau.png", 75));

        $db->deconnectionBdd();
    }


}
$voy = new Voyage();
$voy->editVoyage();


?>