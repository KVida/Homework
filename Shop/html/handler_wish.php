<?php
    if (isset($_GET['product_id'])) {
        $product_id = strip_tags(trim($_GET['product_id']));
    } else {
        echo "error: Такого товара нет.";
        exit;
    }

    $wishlist = array();
    if (isset($_COOKIE['wishlist'])) {
        $wishlist = unserialize($_COOKIE['wishlist']);
        array_push($wishlist, $product_id);
        setcookie('wishlist', serialize(array_unique($wishlist)), time()+3600*24*31,'/');
    } else {
        array_push($wishlist, $product_id);
        setcookie('wishlist', serialize($wishlist), time()+3600*24*31,'/');
    }

    header("location: http://Shop/index.php?r=product&id=" . $product_id);