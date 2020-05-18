<?php
  include 'configs/db.php';
  include 'parts/header.php';

?>
<div class="row" id="products">
  <?php
  if(isset($_GET['page'])){
    $page = $_GET['page'] - 1;
    $offset = $page * 6;
    $sql = "SELECT * FROM products LIMIT 6 OFFSET " . $offset;
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
      include 'parts/product_cart.php';
    }  

  }else {

 $sql = "SELECT * FROM products LIMIT 6";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
      include 'parts/product_cart.php';
    }

  }
   
  ?>

</div><!--/row col9 -->



<div class="row">
	<div class="col-4 offset-4">
		<input type="hidden" value="1" id="current-page">
		<button class="btn btn-primary btn-lg" id="show-more">Показать еще</button>
		

	</div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination offset-4">
    <input type="hidden" value="1" id="current-page">
    <?php
    if(isset($_GET['page'])){
      if($_GET['page'] != 1){
        ?>
      <li class="page-item">
        <a class="page-link" href="index.php?page=<?php echo $_GET['page'] - 1; ?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>

        <?php
      }
    }
    ?>
    

    <?php
    $spl = "SELECT * FROM products";
    $result = mysqli_query($conn, $spl); 
    $col_prod = mysqli_num_rows($result);
    $bad = $col_prod / 6;
    if($col_prod % 6 != 0){
      $bad = $bad + 1;
    } 
    $i = 1 ;
      while($i < $bad){
        ?>
        <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

        <?php
        $i = $i + 1;
      }

    ?>
  
    <?php
      if(isset($_GET['page'])){
      if($_GET['page'] != $i - 1){
    ?>
    <li class="page-item">
      <a class="page-link" href="index.php?page=<?php echo $_GET['page'] + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php
      }
    }
    ?>
  </ul>
</nav>

<?php

include 'parts/footer.php';
?>