<?php
session_start();
include_once ("function_panier.php");
// print"get : <br>";
// print_r ($_GET);
// print" <br> post : <br>";
// print_r ($_POST);
// exit;

switch ($_GET['cas']) 
{
    case 'ajouterArticle':
    {
        $idProduit = $_GET['id'];
        $prixProduit = $_GET['price'];
        $qteProduit = $_POST['quantite'];      
        // si le panier existe
        if (creationPanier()) 

        {
            echo $idProduit, $prixProduit, $qteProduit;

                        
            // si le produit existe deja on ajoute seulement la quantité
            //$positionProduit = array_search($libelleProduit, $_SESSION['panier'] ['libelleProduit']);
            $_SESSION['panier'] ['quantiteTotale'] += $qteProduit;
            $_SESSION['panier'] ['montantTotal'] += $qteProduit * $prixProduit;
            if (isset($_SESSION['panier'] ['Produits'] [$idProduit]))
            {
                $_SESSION['panier'] ['produits'] [$idProduit] += $qteProduit;
            }
            else
            {
                // sinon on ajoute le produit
                $_SESSION['panier'] ['Produits'] [$idProduit] = array();
                $_SESSION['panier'] ['Produits'] [$idProduit] ['qteProduit'] = $qteProduit;
                $_SESSION['panier'] ['Produits'] [$idProduit] ['prixProduit'] = $prixProduit;
            
            }
        }
         else
         {
             echo "Un problème est survenu veuillez contacter l'administrateur du site.";
         }
        break;       
    } 
    
    case 'supprimerArticle':
    { 
        $idProduit = $_GET['id'];
                // si le panier existe
            if (creationPanier() )
            {
                if (isset($_SESSION['panier'] ['Produits'] [$idProduit]))
                {
                    $_SESSION['panier'] ['quantiteTotale'] -= $_SESSION['panier'] ['Produits'] [$idProduit] ['qteProduit'];
                    $_SESSION['panier'] ['montantTotal'] -= $_SESSION['panier'] ['Produits'] [$idProduit] ['qteProduit'] * $_SESSION['panier'] ['Produits'] [$idProduit] ['prixProduit'];
                    unset ($_SESSION['panier'] ['Produits'] [$idProduit]);
                }
                else
                {
                    echo "Produit non présent dans le panier.";
                }
            }
            else
            {
                echo "Un problème est survenu veuillez contacter l'administrateur du site.";
            }
                break;
    }
    case 'modifierQteArticle':  
    {
        // si le panier existe
        if (creationPanier() && !isVerouilleProduit() )
        {
            // si la quantité est positive on modifie sinon on supprime l'article
            if ($qteProduit > 0)
            {
                // recherche du produit dans le panier
                $_SESSION['panier'] ['quantiteTotale'] -= $_SESSION['panier'] ['Produits'] [$idProduit] ['qteProduit'];
                $_SESSION['panier'] ['montantTotal'] -= $_SESSION['panier'] ['Produits'] [$idProduit] ['qteProduit'] * $_SESSION['panier'] ['Produits'] [$idProduit] ['prixProduit'];
                $_SESSION['panier'] ['Produits'] [$idProduit] ['qteProduit'] = $qteProduit;
                $_SESSION['panier'] ['quantiteTotale'] += $qteProduit;
                $_SESSION['panier'] ['montantTotal'] += $_SESSION['panier'] ['Produits'] [$idProduit] ['qteProduit'] * $_SESSION['panier'] ['Produits'] [$idProduit] ['prixProduit'];
                
            }
            else
            {
                supprimerArticle($idProduit);
            }
        }
        else
        {
            echo "Un problème est survenu veuillez contacter l'administrateur du site.";
        }
            break;
    }
    case 'supprimerPanier' :
    {
        unset ($_SESSION ['panier']);
        creationPanier();
        break;
    }
        
     

}
print "<script>history.back()</script>";

?>