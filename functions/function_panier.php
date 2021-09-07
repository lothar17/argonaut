<?php

function creationPanier ()
{
    if (!isset ($_SESSION['panier']))
    {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['Produits'] = array();
        $_SESSION['panier'] ['quantiteTotale'] = $_SESSION['panier'] ['montantTotal'] = 0;
    }
    return true;
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


?>