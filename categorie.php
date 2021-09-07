<?php 
    $orderBy = (isset($_GET['orderBy']) && $_GET['orderBy'] !='') ? $_GET['orderBy']:'';
?>


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
  <?php require "template/header.php";
  
    require_once "functions/function.php";
    $idCategory = $_GET["idCategory"];
    $categoryData = getCategory($idCategory);
        

  ?>
    <div class="col-md-12 d-flex flex-column align-items-center" id="bandeau">
      <div class="card-body">
        <div class="d-flex justify-content-center text-warning">
          <h1 class="card-title font-weight-bold"><?=$categoryData->name?></h1>
        </div>
          <p class="card-text"><?=$categoryData->description?></p>
        <!-- <div class="row p-2 col-md-6 justify-content-center">
            <p class="font-weight-bold align-text-bottom">Trier par</p>
            <button type="button" id = "bouton" class="btn btn-primary m-2" onclick = "triAsc(), change()">Prix croissant</button>

            <button type="button" class="btn btn-secondary m-2" onclick = "triDesc(), change()">Prix décroissant</button>
        </div> -->
          <form action="categorie.php" method="get">
              <input type='hidden' name='idCategory' value='<?=$idCategory?>'>
              <input type='hidden' name='orderBy' value='prix asc'>
              <button type="submit" class="btn btn-primary btn-lg">Prix croissant</button>
          </form>
          <form action="categorie.php" method="get">
              <input type='hidden' name='idCategory' value='<?=$idCategory?>'>
              <input type='hidden' name='orderBy' value='prix desc'>
              <button type="submit" class="btn btn-primary btn-lg">Prix décroissant</button>
          </form>
      </div>    
    </div>

    <div class="row m-2" id="parentCard">

        <?php
            $produit = getProductFromCategoryInCategorie($idCategory, $orderBy);           
            $nbProduit = count($produit);                      
            $j = 0;
            while ($j < $nbProduit) { 
                
        ?>

        <div class="col-md-4 d-flex flex-column align-items-center p-2 page">
          <div class="card card-cascade card-ecommerce wider shadow m-2 ">
          <!--Card image-->
            <div class="view view-cascade overlay text-center img-fluid"> <img class="card-img-top" src="<?= getUrlImageIfExist($produit[$j])?>" alt=""> 
              <a><div class="mask rgba-white-slight"></div></a>
            </div>
            <!--Card Body-->
            <div class="card-body card-body-cascade text-center">
            <!--Card Title-->
              <h4 class="card-title small-name"><strong><?=$produit[$j]->small_name?></strong></h4> <!-- Card Description-->                   
              <p class="price"><strong><?=$produit[$j]->prix?> € !</strong></p> <!-- Card Rating-->      
              <!--Card footer-->
              <div class="card-footer bg-warning">
                <a href="produit.php?idProduit=<?=$produit[$j]->id_produit?>">En savoir plus</a>
              </div>
            </div>
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