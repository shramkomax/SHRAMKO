<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
$page = "order";
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
                        Order
                    </h4>
                    
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                             <th>Adress</th>
                             <th>Time</th>
                            <th>Products</th>
                            <th>Option</th>
                        </thead>
                        <tbody>
                            <?php
                              $sql = "SELECT * FROM orders";
                              $result = $conn->query($sql); 
                              while ($row = mysqli_fetch_assoc($result)) {
                                  // Вывести имя конкретного пользователя 
                                  $sql = "SELECT * FROM users WHERE id=" . $row['user_id'];
                                  
                                  //Выполняем запрос 
                                  $user = mysqli_query($conn, $sql);
                                  // записываем переменную массив с данными пользователя 
                                  $user = mysqli_fetch_assoc($user);
                                  $count = 0;
                                      $basket = json_decode($row['products'], true);
                                      $count = array_sum(array_column($basket['basket'],'count'));
          
                                    


                             ?>
                                 <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $user['login'] ?></td>
                                    <td><?php echo $user['phone'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['created_at'] ?></td>
                                    <td><?php for($i = 0; $i < $count; $i++) {
                                       $sql = "SELECT * FROM products WHERE id=" . $basket["basket"][$i]["product_id"];
                                       $title = mysqli_query($conn, $sql);
                                       $title = mysqli_fetch_assoc($title);
                                       
                                       echo $title['title'] . '-'. $basket["basket"][$i]["count"] .', '. $basket["basket"][$i]["cost_naw"] .', <br>';

                                    } ?></td>
                                    <td>

                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="option/statysbask.php?statys=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary"><?php

                                            if($row['statys'] == 1){
                                              echo ("Отправлено");
                                            } else {
                                              echo("Новый");
                                            }

                                           ?></a>
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