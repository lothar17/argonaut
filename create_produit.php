<?php
    if(isset($_POST["valider"])){
        include("conn.php");
        $req=$db->prepare("insert into produits(id_category, name, prix, description, photo) values(?,?,?,?,?)");
        $req->execute(array($_POST["idCategory"], $_POST["nomProduit"], $_POST["price"], $_POST["avis"], file_get_contents($_FILES["image"]["tmp_name"])));
    }
?>

<!DOCTYPE html>
<html lang="fr">
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
<?php require "template/header.php";?>
    <form name="fo" action="" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <label class="input-group-text" for="idCategory">Catégories</label>
    </div>
        <select class="custom-select" id="idCategory" name="idCategory">
            <option selected>Choose...</option>
            <option value="1">Literie</option>
            <option value="2">Electroménager</option>
            <option value="3">Informatique</option>
            <option value="4">TV Son Audio</option>
        </select>
</div>
    <div class="form-group my-3">
                <label class="text-white" for="name">Nom du produit: </label>
                <input type="text" name="nomProduit" required="" id="name" class="form-control" value=""/>
                <div class="text-danger"><?= $errors['name'] ?? '' ?></div>  
            </div>
            <div class="form-group my-3">
                <label class="text-white" for="name">Prix : </label>
                <input type="number" name="price" id="price" class="form-control" value=""/>
                <div class="text-danger"><?= $errors['name'] ?? '' ?></div>  
            </div>
            <div class="form-group my-3">
                <textarea class="form-control" name="avis" rows="10" cols="170" placeholder="Description"></textarea>
            </div>            
        <input type="file" name="image" /><br />
        <input type="submit" name="valider" value="charger" />
    </form>
</body>
</html>