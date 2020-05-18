<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<title>Shop</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Shop-master</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li>
          <?php

    if(isset($_COOKIE["polzovatel_id"])){ 

      $sql = "SELECT * FROM users WHERE id=" . $_COOKIE["polzovatel_id"];
      $result = mysqli_query($conn, $sql);
      $polzovatel = mysqli_fetch_assoc($result);

    ?>

      <a href="exit.php" class="nav-link"><?php echo $polzovatel["login"];?>&#187;</a>

    <?php

    } else {

    ?>

      <a href="login.php" class="nav-link">Войти</a> <!-- Выйти -->

    <?php

    }

    ?>
    </ul>
    <?php
      $cost = 0;
      if(isset($_COOKIE['basket'])){
      $basket = json_decode($_COOKIE['basket'], true);
      $cost = array_sum(array_column($basket['basket'],'count'));
      }


    ?>
    <form class="form-inline my-2 my-lg-0">
      <a href="/basket.php" class="btn btn-primary" id="go-basket">
        <img src="/images/cart.svg" width="32" alt="">
        <br>Корзина - <span><?php echo $cost ?></span>

      </a>
    </form>

  </div>
</nav>

<div class="container">
    
 <div class="row my-2">

    <div class="col-3">
      <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/parts/cat_nav.php';
      ?>
    </div><!--/col-3 -->

    <div class="col-9">
      <div class="container">