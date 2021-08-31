<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bs/style.css">
    
    <title>Bienvenue sur Argonaut.fr</title>
</head>
    <body>
    <?php 
    require "template/header.php";
    require_once "functions/function_panier.php";  
    creationPanier();
    
    ?>

        <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active col-md-12 d-flex flex-row justify-content-around">
              <img src="images/lit1.jpg" class="img-responsive" alt="..." width="900" height="360">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item col-md-12 d-flex flex-row justify-content-around">
              <img src="images/tv1.jpg" class="img-responsive" alt="..." width="900" height="360">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item col-md-12 d-flex flex-row justify-content-around">
              <img src="images/aspirateur.jpg" class="img-responsive" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> -->
        <button></button>
        <a href="functions/temp.php">create</a>
        <a href="create_produit.php">create</a>
        <div id="carouselExampleIndicators" class="carousel slide" style="background-color: rgb(191, 155, 218);" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner container col-md-4">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/aspirateur.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="container text-dark font-weight-bold">aspirateur DYSON</h5>
                <p class="text-dark font-weight-bold">149 $</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/ecran2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/tv2.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <br>
      
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="../images/aspirateur.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="container text-dark font-weight-bold">aspirateur DYSON</h5>
              <p class="text-dark font-weight-bold">149 $</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="images/ecran2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="images/tv2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        <br>
        <div class="row m-5">
          <?php
            require_once "functions/function.php";

            $data = getCategories();
            $nbCategory = count($data);
            $i = 0;
            while ($i < $nbCategory) {                                             
          ?>

          <div class="col-md-12 d-flex flex-column align-items-center bg-primary">
            <div class="card-body">
              <div class="d-flex justify-content-center text-warning">
                <h1 class="card-title font-weight-bold"><?=$data[$i]->name?></h1>
              </div>
              <p class="card-text"><?=$data[$i]->description?></p>
              <a href="categoriebis.php?idCategory=<?=$data[$i]->id?>" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
         
        <div class="row">

          <?php
            $idCategory = $data[$i]->id;  
            $produit = getProductFromCategoryInIndex($idCategory);
            $nbProduit = count($produit);          
            $j = 0;
            while ($j < $nbProduit) { 
          ?>
            <div class="card col-md-4 d-flex flex-column align-items-center p-5">
              <div class="p-2" style="border: 1px solid grey">
                <img class="card-img-top img-fluid" src="<?= getUrlImageIfExist($produit[$j])?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?=$produit[$j]->name?></h5>
                  <h3 class="card-text font-weight-bold text-danger">Prix <?=$produit[$j]->prix?> € !</h3>
                  <a href="produitbis.php?idProduit=<?=$produit[$j]->id_produit?>" class="btn btn-primary">En savoir plus</a>
                </div>
              </div>
            </div>
    
          <?php
          $j++;
            }
          ?>

        </div> 

          <?php
          $i++;
            } 
          ?>

           
          </div>
          
        </div>     
        <?php require "template/footer.php";?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>