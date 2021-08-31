<?php

function creationPanier ()
{
    if (!isset ($_SESSION['panier']))
    {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['produits'] = array();
    }
    return true;
}



function ajouterArticle ($idProduit, $qteProduit, $prixProduit) 
{
    // si le panier existe
    if (creationPanier()) 
    {

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
}


function supprimerArticle ($idProduit)
{
    // si le panier existe
    if (creationPanier() && !isVerouilleProduit() )
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

}


function modifierQteArticle ($idProduit, $qteProduit)
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
}


function montantGlobal ()
{
    $total = 0;
    for ($i = 0; $i < count ($_SESSION['panier'] ['libelleProduit']); $i ++)
    {
        $total += $_SESSION['panier'] ['libelleProduit'] [$i] * $_SESSION['panier'] ['prixProduit'] [$i];
    }
    return $total;
}

function isVerrouille ()
{
    if (isset ($_SESSION ['panier']) && $_SESSION ['panier'] ['verrou'])
    {
        return true;  
    }
    else
    {
        return false;
    } 
}


function supprimePanier ()
{
    unset ($_SESSION ['panier']);
}


?>