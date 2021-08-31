<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>produit</title>
</head>
<body>
    <?php require "template/header.php";?>
    <?php
        require_once "functions/function.php";
        require_once "functions/function_panier.php";
        $idProduit = $_GET["idProduit"];
        $ProduitData = getProduit($idProduit);
    ?>
    <div class="row m-5">
        <div class="col-md-6">
            <img src="<?=getUrlImageIfExist($ProduitData)?>" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 d-flex flex-column align-items-center">
            <div class="container-fluid p-4" style="border-bottom: 1px solid grey">
                <h2><?=$ProduitData->name?></h2>
                <h4 class="font-weight-bold"><?=$ProduitData->prix?> €</h4>
            </div>
            <div class="container-fluid p-4" style="border-bottom: 1px solid grey">
                <h4 class="p-2">Description</h4>
                <p><?=$ProduitData->description?></p>
            </div>
            <div class="container-fluid p-4 font-weight-bold" style="border-bottom: 1px solid grey">
                <h4 class="p-2">Expédition et retours</h4>
                <p>Livraison en magasin 0 €
                    <span class="text-danger">(Offerte)</span></p>
                    <p>Livraison à domicile Colissimo
                        3,99€ <span class="text-danger">(Offerte dès 59€)</span></p>
                        <p>Livraison en point relais
                            2,99€ <span class="text-danger">(Offerte dès 59€)</span></p>
            </div>
            <form action="<?php ajouterArticle($idProduit, 1, $ProduitData->prix)?>" method="post">
            <input type="submit" class="btn btn-primary btn-lg btn-block">Ajouter au panier</input>  
            </form>
        </div>
    </div>
    <?php
    
    print_r ($_SESSION ['panier']);
    ?>
    <?php require "template/footer.php";
    
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>