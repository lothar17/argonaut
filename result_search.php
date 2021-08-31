<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bs/style.css">
    <title>Document</title>
</head>
<body>
    <?php require "template/header.php";
    $searchBar = $_POST['research'];
    $resultSearch = showBySearch($searchBar);
    //print_r($resultSearch);
    
    
    ?>

    <div class="row m-2">
        <?php
            $nbProduit = count($resultSearch);          
            $j = 0;
            while ($j < $nbProduit) { 
        ?>
        <div class="products card col-md-4 d-flex flex-column align-items-center p-5" style="border: 1px solid grey">
            <img class="card-img-top img-fluid" src="<?=getUrlImageIfExist($resultSearch[$j])?>" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <h5 class="card-title"><?=$resultSearch[$j]->name?></h5>
                </div> 
                <h3 class="card-text font-weight-bold text-danger"><?=$resultSearch[$j]->prix?> € !</h3> 
                <a href="produitbis.php?idProduit=<?=$resultSearch[$j]->id_produit?>" class="btn btn-primary">En savoir plus</a>
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