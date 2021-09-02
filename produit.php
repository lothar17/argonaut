
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
    <script src="functions/tri.js"></script>
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
            <form action="functions/action.panier.php?cas=ajouterArticle&id=<?=$idProduit?>&price=<?=$ProduitData->prix?>" method="post">
                <input type="text" name="quantite" value="1" id="quantite" size="2" maxlength="4"> 
                <button type="button" onClick="add('quantite');">plus</button> 
                <button type="button" onClick="substract('quantite');">moins</button> 
           

            
            <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter au panier</button>  
            </form>
        </div>
    </div>
    <?php
    //unset ($_SESSION ['panier']);
   print_r ($_SESSION ['panier']);
    ?>
    <?php require "template/footer.php";
    
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>