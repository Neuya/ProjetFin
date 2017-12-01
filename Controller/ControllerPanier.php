<?php
require_once (File::build_path(array('Modele','ModelPanier.php')));

    class ControllerPanier{
		
		public static function readAllPanier() {
			$tab_v = ModelPanier::getAllPanier();
			$pagetitle="Liste des produits de votre panier";
			$controller="panier";
			$view="list";
			require File::build_path(array("Vues","view.php"));
		}
    
    
		public static function errorPanier(){
			$pagetitle="Erreur";
			$controller="produit";
			$view="error";
			require File::build_path(array("Vues","view.php"));
		}
    
		
	
		public static function createdPanier(){
			/*$produit = new ModelPanier($_GET['id'],$_GET['nomproduit'],$_GET['couleur']);
			$produit->save();*/
                        $produit_panier= new ModelPanier($_GET['idProduit'],$_SESSION['idUtil'],1);
                        $produit_panier->save();
			$pagetitle="Produit ajouté";
			$controller="panier";
			$view="created";
			//$tab_v = ModelProduit::getAllProduit();
			require File::build_path(array("Vues","view.php"));
		}
	
		public static function deletedPanier(){
			$v = ModelProduit::getProduitById($_GET["id"]);
			if($v == false){
				ControllerProduit::error();
			}	//"redirige" vers les erreurs
			else{
				ModelProduit::deleteProduitById($_GET["id"]);
				$pagetitle="Produit enlevé";
				$controller="panier";
				$view="deleted";
				require File::build_path(array("Vues","view.php"));
			}
		}
    }
?>

