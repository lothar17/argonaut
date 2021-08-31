<?php




function getProdByCategoryName($categoryName) {
    require "conn.php";
    // $categoryName = filter_var($categoryName, FILTER_SANITIZE_SPECIAL_CHARS);
    if ($categoryName !== null) {
        $req = $db->prepare("SELECT * FROM categories , produits  WHERE categories.name = ? AND categories.id = produits.id_category");
        $req->execute(array($categoryName));
        return $req->fetchAll();
    }
    return false;

    
}

function getCategories() {
    require "conn.php";
    $req = $db->prepare("SELECT * FROM `categories` order by name");
    $req->execute();
    return $req->fetchAll();
}

function getProductFromCategoryInIndex($id_category) {
    require "conn.php";
    $req = $db->prepare("SELECT * FROM `produits` WHERE id_category = $id_category order by rand() limit 3");
    $req->execute();
    return $req->fetchAll();
}

function getCategory($id_category) {
    require "conn.php";
    $req = $db->prepare("SELECT * FROM `categories` WHERE id = $id_category");
    $req->execute();
    return $req->fetch();
}

function getProductFromCategoryInCategorie($id_category) {
    require "conn.php";
    $req = $db->prepare("SELECT * FROM `produits` WHERE id_category = $id_category order by `prix` DESC");
    $req->execute();
    return $req->fetchAll();
}

function getProduit($idProduit) {
    require "conn.php";
    $req = $db->prepare("SELECT * FROM `produits` WHERE id_produit = $idProduit");
    $req->execute();
    return $req->fetch();
}


function getUrlImageIfExist ($p) {
    if ($p->image_url) {
        return $p->image_url;
    }
     return "https://st.depositphotos.com/1428083/2946/i/600/depositphotos_29460297-stock-photo-bird-cage.jpg";

}

function showByPriceDescon ($id_category) {
    require "conn.php";
    $req = $db->prepare("SELECT * FROM `produits` WHERE id_category = $id_category ORDER BY `prix` DESC");
    $req->execute();
    return $req->fetchAll();
}

function showByPriceAsccon ($id_category) {
    require "conn.php";
    $req = $db->prepare("SELECT * FROM `produits` WHERE id_category = $id_category ORDER BY `prix` ASC");
    $req->execute();
    return $req->fetchAll();
}



function showByPriceDesc () {
    $produit = getProductFromCategoryInCategorie($idCategory);
    $prix = array_column($produit, 'prix');
    array_multisort($prix, SORT_DESC, $produit);
    foreach ($produit as $prod) {
        echo $prod->name." ".$prod->prix;
    }
}

function showBySearch ($search) {
    require "conn.php";
    $req = $db->prepare("SELECT * FROM `produits` WHERE `name` LIKE '%$search%'");
    $req->execute();
    return $req->fetchAll();
}

function login($email_clean, $password_clean)
{
    require "conn.php";

    $req = $db->prepare("SELECT * FROM users WHERE mail=:email");
    $req->bindValue(":email", $email_clean, PDO::PARAM_STR);
    $req->execute();
    $row = $req->rowCount();
    echo 'nb de lignes = '.$row;
    if ($row == 1) 
    {
        $user = $req->fetch();
        $req->closeCursor();
        session_start();
        if ($password_clean == $user->password) 
        {
            
            $_SESSION['user'] = $user;
            return true;
        }
        else
        {
            if (array_key_exists('user', $_SESSION)){
                unset ($_SESSION['user']);
            }
            
            return false; 
        }
    }
}




?>