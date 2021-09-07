<?php
session_start();
require_once "functions/function.php";
?>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-md-5">
    <img src="images/a.jpg" width="45" height="45" alt="">
    <a class="navbar-brand font-weight-bold text-white" href="index.php">
      <span class="text-warning">A</span>
      <span class="text-danger">R</span>
      <span class="text-warning">G</span>
      <span class="text-danger">O</span>
      <span class="text-warning">N</span>
      <span class="text-danger">A</span>
      <span class="text-warning">U</span>
      <span class="text-danger">T</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation items that will be collapsed -->
    <div class="collapse navbar-collapse" id="navbarToggler">

      <!-- Dropdown button -->
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégories
        </button>

        <!-- Dropdown items -->
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <?php
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

      <!-- Search bar -->
      <form class="mx-2 d-inline w-100" action="result_search.php" method="post">
        <div class="input-group">
          <input class="form-control mr-lg" name="research" type="search" placeholder="Search">
          <span class="input-group-append">
            <button class="btn btn-outline-secondary border border-left-0" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <p class="text-white"><?= $_SESSION['user']->first_name ?? '' ?></p>
      <!-- Basket -->
      <a href="panier.php">
        <button type="button" class="btn btn-info">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i> Panier <span class="badge badge-pill badge-danger"><?=$_SESSION['panier'] ['quantiteTotale']?></span>
        </button>
      </a>
      <!-- Settings dropdown button -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cog fa-lg"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="login.php">Connection</a>
            <a class="dropdown-item" href="logout.php">Déconnexion</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
