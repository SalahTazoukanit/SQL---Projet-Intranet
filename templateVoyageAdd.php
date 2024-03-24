<?php
    
    $allVoyages =

    '<div class="voyageInfo">
        <img src='.$voyage["image"].'>
        <div class="infos">
            <h3>'.$voyage['lieu'].'</h3>
            <p>'.$voyage["description"].'</p>
            
        </div>  
    </div> 
    <div class="buttons">
        <a href="formulaireAddEdit.php"><button id="editVoyage" name="edit">Modifier</button></a>
        <button id="removeVoyage" name="remove">Supprimer</button>
    </div>' ;
?>
