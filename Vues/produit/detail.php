<!DOCTYPE html>
<html>
    
    <body>

        <?php
        
            $vCouleur= htmlspecialchars($v->getCouleur());
            $vNomProduit= htmlspecialchars($v->getNomProduit());
            $vIdProduit= htmlspecialchars($v->getIdProduit());
            echo '<p> Couleur du produit ' . $vCouleur . '.</p>';
            echo '<p> Libellé du produit ' . $vNomProduit . '</p>';
            echo '<p> ID du produit ' . $vIdProduit . '.</p>';
            echo "$_SESSION[idUtil]";
            echo "<a href='http://webinfo.iutmontp.univ-montp2.fr/~rosy/PHP/Projet/index.php?action=createdPanier&idProduit=$vIdProduit'>Ajouter</a>"
            
        ?>
    </body>
</html>

