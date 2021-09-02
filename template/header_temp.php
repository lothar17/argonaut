<?php
session_start();
?>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light row bg-dark d-flex h50 align-items-center justify-content-around p-5">
    <div class="d-flex flex-column">
      <div class="col-md-12 row">
        <div class="col-md-4 row d-flex justify-content-center">                  
          <img src="images/a.jpg" width="45" height="45" alt="">
          <a class="navbar-brand font-weight-bold text-white" href="index.php">
            <span class="text-warning">A</span><span class="text-danger">R</span><span class="text-warning">G</span><span class="text-danger">O</span><span class="text-warning">N</span><span class="text-danger">A</span><span class="text-warning">U</span><span class="text-danger">T</span>
          </a>
        </div>

        <div class="col-md-6">
          <form class="d-flex" action="result_search.php" method="POST">
            <input name="research" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>

        <div class="col-md-2 row d-flex">
          <a href="login.php">
            <div>
              <h5 class="text-white"><p>Mon compte</p>  <?= $_SESSION['user']->first_name ?? '' ?></h5>
            </div>           
          </a>
            <div class="text-white p-2 ml-3">
              <a href="panier.php">Panier</a>
              <div>                        
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart text-white" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 row">
          <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Liste des catégories
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

              <?php
                include "functions/function.php";
                $data = getCategories();                       
                $nbCategory = count($data);
                $i = 0;
                while ($i < $nbCategory) { 
              ?>

              <a class="dropdown-item" href="categorie.php?idCategory=<?=$data[$i]->id?>"><?=$data[$i]->name?></a>

              <?php
                  $i++;
                  } 
              ?>
              
            </div>
          </div>
        </div> 
      </div>
    </div>    
  </nav>      
</header>
