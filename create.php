<?php
    if(isset($_POST["valider"])){
        include("conn.php");
        $req=$db->prepare("insert into images(name, id_produit, taille, type, bin) values(?,?,?,?,?)");
        $req->execute(array($_FILES["image"]["name"],  $_POST["id_produit"], $_FILES["image"]["size"], $_FILES["image"]["type"], file_get_contents($_FILES["image"]["tmp_name"])));
    }

    function replace($letter, $newLetter, $str) {
        for ($i=0; $i<strlen($str); $i++){
            if ($str[$i] == $letter) {
                $str[$i] = $newLetter;
            }
        }
    }

    function remplacerLesLettres($str) {
        replace ("e", "3", $str);
        replace ("i", "1", $str);
        replace ("o", "0", $str);
        return $str;
        
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="fo" action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" /><br />
        <label class="text-white" for="name">idProduit : </label>
                <input type="number" name="id_produit" id="id_produit" class="form-control" value=""/>
        <input type="submit" name="valider" value="charger" />
    </form>
    <?php
    var_dump (remplacerLesLettres ("Les cours de programmation Web sont trops cools"));
    ?>
</body>
</html>