<?php
    echo '<p>Le produit a bien été supprimé </p>';
    require_once (File::build_path(array('Modele','ModelProduit.php')));
     require File::build_path(array('view','produit','list.php'));
?>