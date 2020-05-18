<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
$page = "products";
 include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

 ?>
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin/products.php">Products</a></li>
    <li class="breadcrumb-item">Edit</li>
  </ol>
</nav>
 <?php

if(
    isset($_POST["title"]) && isset($_POST["description"])
    && $_POST["title"] != "" && $_POST["description"] != ""
){

 $sql = "UPDATE products SET `title`='" . $_POST["title"] . "',`description`='" . $_POST["description"] . "',`content`='" . $_POST["content"] . "',category_id='" . $_POST["cat_id"] . "' WHERE id=" . $_POST["id"];


    if(mysqli_query($conn, $sql)) {
        echo "<h2>Товар изменен</h2>";
        header("Location: /admin/products.php");
    }else {
        echo "<h2>произошла ошибка</h2>" . mysqli_error($conn);
    }
}


?>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Product</h4>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" type="text" class="form-control" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" type="text" class="form-control" placeholder="Content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="cat_id">
                                    <option value="0">Не выбрано</option>
                                    <?php
                                        $sql = "SELECT * FROM categories";
                                        $result = $conn->query($sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['title'] . "</option>";
                                        }

                                    ?>

                                </select>
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
