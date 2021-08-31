<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <?php require "template/header.php";?>
  <?php
    include "functions/function.php";

    $data = getCategory($_GET["idCategory"]);
  ?>
    <div class="container-fluid h-100 p-5 d-flex flex-column align-items-center" style="background-color: cadetblue;">
        <h1><?=$data->name?></h1>
        <p><?=$data->description?></p>
    </div>
    <div class="row m-2">
        <div class="card col-md-4 d-flex flex-column align-items-center p-5" style="border: 1px solid grey">
            <img class="card-img-top img-fluid" src="images/lit1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">SOMDREAM Ensemble Matelas 140x190 cm + Sommier + Pieds - Mémoire de Forme</h5>
              <h3 class="card-text font-weight-bold text-danger">319 € !</h3>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
          <div class="card col-md-4 d-flex flex-column align-items-center p-5" style="border: 1px solid grey">
            <img class="card-img-top img-fluid" src="images/lit2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">BOBOCHIC Matelas COCOONING 160x200 cm - 26 cm - Mémoire de Forme - </h5>
              <h3 class="card-text font-weight-bold text-danger">395 € !</h3>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
          <div class="card col-md-4 d-flex flex-column align-items-center p-5" style="border: 1px solid grey">
            <img class="card-img-top img-fluid" src="images/lit5.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">DEKO DREAM Ensemble SPRINGMAX Matelas + sommier 140x190 cm - </h5>
              <h3 class="card-text font-weight-bold text-danger">289 € !</h3>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
    </div>

    <div class="row m-2">
        <div class="card col-md-4 d-flex flex-column align-items-center p-5" style="border: 1px solid grey">
            <img class="card-img-top img-fluid" src="images/lit9.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">DEKO DREAM Pack Star Matelas 90x190 + Couette 140x200 + Oreiller 60x60</h5>
              <h3 class="card-text font-weight-bold text-danger">179 € !</h3>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
          <div class="card col-md-4 d-flex flex-column align-items-center p-5" style="border: 1px solid grey">
            <img class="card-img-top img-fluid" src="images/lit6.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pack prêt à dormir ZEN - Matelas + sommier 140x190 + couette + 2 oreillers</h5>
              <h3 class="card-text font-weight-bold text-danger">395 € !</h3>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
          <div class="card col-md-4 d-flex flex-column align-items-center p-5" style="border: 1px solid grey">
            <img class="card-img-top img-fluid" src="images/lit8.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Matelas 160x200 Système 7 couches DEWINNER®-IZTOSS® -22cm</h5>
              <h3 class="card-text font-weight-bold text-danger">289 € !</h3>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
    </div>

    <?php require "template/footer.php";?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>