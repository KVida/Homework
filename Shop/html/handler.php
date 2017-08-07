<?php
    
    if (isset($_GET['amount'])) {
            $product_id = strip_tags(trim($_GET['product_id']));
            $amount = strip_tags(trim($_GET['amount']));
    } else {
        echo "error: Введите к-во товаров.";
        exit;
    }

    $product_cart = array();
    if (isset($_COOKIE['product_cart'])) {
        $product_cart = unserialize($_COOKIE['product_cart']);
        $product_cart[$product_id] = $amount;
        setcookie('product_cart', serialize($product_cart), time()+3600,'/');
    } else {
        $product_cart[$product_id] = $amount;
        setcookie('product_cart', serialize($product_cart), time()+3600,'/');
    }

    header("location: http://shop/index.php?r=product&id=" . $product_id);