<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bs/style.css">
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
                <a href="produit.php?idProduit=<?=$produit[$j]->id_produit?>" class="btn btn-primary">En savoir plus</a>
            </div>
        </div> 

        <?php
        
            $j++;
            }
        ?> 

    </div>
 
    <?php require "template/footer.php";?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>