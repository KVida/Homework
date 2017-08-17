<?php
    if (isset($_POST['wish_product_id'])) {
        $wish_product_id = strip_tags(trim($_POST['wish_product_id']));
    } else {
        echo "error: Такого товара нет.";
        exit;
    }

    $wishlist = array();
    if (isset($_COOKIE['wishlist'])) {
        $wishlist = unserialize($_COOKIE['wishlist']);
        array_push($wishlist, $wish_product_id);   
    } else {
        array_push($wishlist, $wish_product_id);
    }
    setcookie('wishlist', serialize(array_unique($wishlist)), time()+3600*24*30,'/');

    header("location: index.php?r=product&id=" . $wish_product_id);