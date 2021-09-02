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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>