<?php

    if(isset($_POST["valider"])){
        include("conn.php");
        $req=$db->prepare("insert into users(first_name, mail, password) values(?,?,?)");
        $req->execute(array($_POST["pseudo"], $_POST["email"], $_POST["password"]));

    }
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
</head>
<body style="background-color: rgb(226, 226, 226);">
  <?php require "template/header.php";?>
  <div class="container bg-light col-md-5 mt-5 mb-5 p-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
          
            <form method="POST">
              <h2 class="p-2 font-weight-bold bg-dark d-flex justify-content-center">
                  <a id="links" href="index.html">
                    <span class="text-warning">A</span><span class="text-danger">R</span><span class="text-warning">G</span><span class="text-danger">O</span><span class="text-warning">N</span><span class="text-danger">A</span><span class="text-warning">U</span><span class="text-danger">T</span>
                  </a>     
              </h2>

              <div class="form-group row col-md-12 p-2">
                  
                  <input type="name" name="pseudo" class="form-control" id="exampleInputFirst_name1" placeholder="Pseudo">
                </div>
              
                <div class="form-group row col-md-12 p-2">
                  <!-- <label for="exampleInputEmail1" class="font-weight-bold">Déja client ?</label> -->
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group row col-md-12 p-2">
                  
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
              </div>                
                
            
              <div class="form-group d-flex flex-column justify-content-center align-items-center col-md-12 p-2">
                <input class="btn btn-success" type="submit" name="valider" value="S'inscrire" />
                <label for="exampleInputEmail1" class="font-weight-bold">Déja client ?</label>
                <button type="submit" class="btn btn-success"><a id="links" href="login.php">Se connecter</a></button>
              </div> 
            </form>
        </div>
    </div>
    <?php require "template/footer.php";?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>