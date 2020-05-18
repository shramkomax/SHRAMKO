<?php
  include 'configs/db.php';
  include 'parts/header.php';

?>
<div class="row" id="products">
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Count</th>
      <th scope="col">Costs</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
      <?php
        if(isset($_COOKIE['basket'])) {

          $basket = json_decode($_COOKIE['basket'], true);

          for($i = 0; $i < count($basket['basket']); $i++) {
            $sql = "SELECT * FROM products WHERE id=" . $basket['basket'][$i]['product_id'];
            $result = $conn->query($sql);
            $product = mysqli_fetch_assoc($result);
            ?>
          <tr>
            <th scope="row"><?php echo $product['id'] ?></th>
            <td><?php echo $product['title'] ?></td>
            <td><input onchange="chengBasket(this, <?php echo $product['id'] ?>,<?php echo $product['cost'] ?>)" id="count" type="number" name="count" value="<?php echo $basket['basket'][$i]['count']; ?>"></td>
            <td id="cost_<?php echo $product['id'] ?>"><?php echo ($basket['basket'][$i]['cost_naw']); ?></td>
            <td><button onclick="deleteProductBasket(this, <?php echo $product['id'] ?>)"class="btn btn-danger">Delete</button></td>

          </tr>  
          
          <?php
          }
        }               
      ?> 
  </tbody>
</table>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Оформить заказ</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="/modules/basket/order.php">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ваше имя</label>
                            <input name="username" type="text" class="form-control" placeholder="username">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ваше адрес</label>
                            <input name="address" type="text" class="form-control" placeholder="address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                          <div class="form-group">
                            <label>Ваше Телефон</label>
                            <input name="phone" type="text" class="form-control" placeholder="phone">
                        </div>
                    </div>
                </div>
                <button name="submit" value="1" type="submit" class="btn btn-success btn-fill pull-right">Заказать</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

</div><!--/row col9 -->

<?php
/*
1 Вывести блок с корзиной в шапке сайта done
2 Сделать таблицу для хранения заказов done
3 Добавление товара в корзину 
  3.1 Сделать клик по кнопке добавить в корзину done
  3.2 Добавить товар в куки корзины done
  3.3 Отобразить что товар добавился на корзине 
4 Сделать страницу корзины 
5 Сделать оформление заказа   


*/
?>

<?php

include 'parts/footer.php';
?>