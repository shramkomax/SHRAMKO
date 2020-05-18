 <ul class="nav">

    <li class="nav-item <?php if($page == "home"){ echo 'active'; } ?>">
        <a class="nav-link" href="/admin">
            <i class="nc-icon nc-chart-pie-35"></i>
            <p>Home</p>
        </a>
    </li>
    <li class="nav-item <?php if($page == "users"){ echo 'active'; } ?>">
        <a class="nav-link" href="./user.html">
            <i class="nc-icon nc-circle-09"></i>
            <p>Users</p>
        </a>
    </li>
    <li class="nav-item <?php if($page == "products"){ echo 'active'; } ?>">
        <a class="nav-link" href="/admin/products.php">
            <i class="nc-icon nc-apple"></i>
            <p>Products</p>
        </a>
    </li>
     <li class="nav-item <?php if($page == "order"){ echo 'active'; } ?>">
        <a class="nav-link" href="/admin/order_admin.php">
            <i class="nc-icon nc-attach-87"></i>
            <p>Order</p>
        </a>
    </li>
    <li class="nav-item <?php if($page == "category"){ echo 'active'; } ?>">
        <a class="nav-link" href="/admin/category.php">
            <i class="nc-icon nc-bullet-list-67"></i>
            <p>Categories</p>
        </a>
    </li >
     <li class="nav-item <?php if($page == "logout"){ echo 'active'; } ?>">
        <a class="nav-link" href="#">
            <i class="nc-icon nc-key-25"></i>
                <p>Log out</p>
        </a>
    </li>
</ul>