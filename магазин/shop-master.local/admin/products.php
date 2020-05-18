<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
$page = "products";
 include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item">Products</li>
  </ol>
</nav>



   
   <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">
                        Products
                        <a href="http://shop-master.local/admin/option/products/add.php" class="btn btn-primary">Add Products</a>
                    </h4>
                    
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Option</th>
                        </thead>
                        <tbody>
                            <?php
                              $sql = "SELECT * FROM products";
                              $result = $conn->query($sql); 
                              while ($row = mysqli_fetch_assoc($result)) {
                             ?>
                                 <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                    <td><?php echo $row['category_id'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="option/products/edit.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">Edit</a>
                                          <a href="option/products/delete.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">Delete</a>
                                        </div>
                                    </td>
                                </tr>


                             <?php
                              } 

                            ?>
                            
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
</div>
 <?php
 include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/footer.php';
 ?> 