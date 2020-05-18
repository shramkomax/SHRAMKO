<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
$page = "category";
 include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item">Category</li>
  </ol>
</nav>


   
   <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">
                        Category
                        
                        <a href="http://shop-master.local/admin/option/category/add_cat.php" class="btn btn-primary">Add Category</a>
                    </h4>
                    
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Option</th>
                        </thead>
                        <tbody>
                            <?php
                              $sql = "SELECT * FROM categories";
                              $result = $conn->query($sql); 
                              while ($row = mysqli_fetch_assoc($result)) {
                             ?>
                                 <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="option/category/edit_cat.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">Edit</a>
                                          <a href="option/category/dell_cat.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">Delete</a>
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