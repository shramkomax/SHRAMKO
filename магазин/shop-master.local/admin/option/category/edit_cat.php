<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
$page = "products";
 include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';


  ?>
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/category.php">Category</a></li>
    <li class="breadcrumb-item">Edit Category</li>
  </ol>
</nav>
 <?php

if(
    isset($_POST["title"]) 
){

 $sql = "UPDATE categories SET `title`='" . $_POST["title"] . "' WHERE id=" . $_POST["id"];


    if(mysqli_query($conn, $sql)) {
        echo "<h2>Категория изменена</h2>";
        header("Location: /admin/category.php");
    }else {
        echo "<h2>произошла ошибка</h2>" . mysqli_error($conn);
    }
}


?>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Category</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                     <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" type="text" class="form-control" placeholder="Title">
                            </div>
                        </div>
                    </div>
                    <button name="submit" value="1" type="submit" class="btn btn-success btn-fill pull-right">Add</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
