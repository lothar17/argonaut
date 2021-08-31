<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <script src="functions/tri.js"></script>

    
</head>
<body>
  <?php require "template/header.php";?>
  <?php
    require_once "functions/function.php";
    $idCategory = $_GET["idCategory"];
    $categoryData = getCategory($idCategory);    

  ?>
    <div class="container-fluid h-100 p-5 d-flex flex-column align-items-center" style="background-color: cadetblue;">
        <h1><?=$categoryData->name?></h1>
        <p><?=$categoryData->description?></p>
        <div class="row p-2 col-md-6 justify-content-center">
            <p class="font-weight-bold align-text-bottom">Trier par</p>
            <button type="button" id = "bouton" class="btn btn-primary m-2" onclick = "triAsc(), change()">Prix croissant</button>

            <button type="button" class="btn btn-secondary m-2" onclick = "triDesc(), change()">Prix décroissant</button>
        </div>
    </div>

    <div class="row m-2" id="parentCard">

        <?php
            $produit = getProductFromCategoryInCategorie($idCategory);
            $nbProduit = count($produit);                      
            $j = 0;
            // $prix = array_column($produit, 'prix');
            // array_multisort($prix, SORT_DESC, $produit);
            // foreach ($produit as $prod) {
            //     echo $prod->name." ".$prod->prix;
            // }
            //print_r (showByPriceAsccon($idCategory));
            while ($j < $nbProduit) { 
                
        ?>
    
        <div class="products card col-md-4 d-flex flex-column align-items-center p-5" style="border: 1px solid grey">
            <img class="card-img-top img-fluid" src="<?=getUrlImageIfExist($produit[$j])?>" alt="Card image cap">
            <div class="card-body">
               <div class="d-flex justify-content-center">
                    <h5 class="card-title"><?=$produit[$j]->name?></h5>
                </div> 
                <h3 class="card-text font-weight-bold text-danger"><?=$produit[$j]->prix?> € !</h3> 
                <a href="produitbis.php?idProduit=<?=$produit[$j]->id_produit?>" class="btn btn-primary">En savoir plus</a>
            </div>
        </div> 

        <?php
        
            $j++;
            }
        ?> 

    </div>
 
    <?php require "template/footer.php";?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>