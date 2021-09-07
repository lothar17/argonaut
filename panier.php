
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bs/style.css">
    <title>produit</title>
</head>
<body>
    <?php 
        require "template/header.php";
        include_once ("functions/function_panier.php");
        include_once ("functions/function.php");
        foreach ($_SESSION['panier']['Produits'] as $key=> $val) {
            $leProduit = getProduit($key);
            //$idProduit = $_GET["idProduit"];           
             
    ?>
    
    <div class="row m-5"  style="border: 1px solid grey">
        <div class="col-md-2 m-2 d-flex align-items-center">
            <img src="<?=getUrlImageIfExist($leProduit)?>" class="img-fluid" alt="">
        </div>
        <div class="col-md-5 d-flex flex-column align-items-center">
            <div class="container-fluid p-4 font-weight-bold">
                <h5><?=$leProduit->name?></h5>
                <h5 class="font-weight-bold"><?=$val['prixProduit']?> €</h5>
                <p class="text-success">En stock</p>           
             </div>
        </div>
        <div class="col-md-5 d-flex flex-column align-items-center">
            <form action="functions/action.panier.php?cas=supprimerArticle&id=<?=$key?>&price=<?=$val['prixProduit']?>" method="post">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Supprimer du panier</button>
            </form>
        </div>
    </div>
        
    <?php
        }
    ?>

    <div class="row m-5">
        <div class="col-md-12 d-flex align-items-center">
            <div class="col-md-7 d-flex flex-column align-items-center">
                <p class="text-success">Votre commande est éligible à la livraison Standard gratuite en France métropolitaine </p>
                <p>Choisissez cette option lors de votre commande</p>
            </div>
            <div class="col-md-5 d-flex flex-column align-items-center">    
                <h4> Sous-total (<?=$_SESSION['panier'] ['quantiteTotale']?> articles): <?=$_SESSION['panier'] ['montantTotal']?> €</h4>
                <button type="submit" class="btn btn-warning btn-lg btn-block">Passer commande</button>
            </div>
        </div>
        <form action="functions/action.panier.php?cas=supprimerPanier" method="post">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Supprimer le panier</button>
        </form>

    </div>
  
    <?php
    //unset ($_SESSION ['panier']);
    
    ?>
 
  
    <?php require "template/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>