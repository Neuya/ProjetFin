<!DOCTYPE html>
<html>

    <body>
        <?php
        foreach ($tab_v as $v){
            $vIdProduit= htmlspecialchars($v->getIdProduit());
            $IDurl=rawurlencode($v->getIdProduit());
            
            echo "<a href='index.php?action=read&id=$IDurl'> Numéro ID du produit : $vIdProduit</a> <br>";
        }
        ?>
    </body>
</html>

