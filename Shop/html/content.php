<?php 
    if (isset($_GET['r'])) {
        $r = $_GET['r'];
    } else {
        $r = '';
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    switch ($r) {
        case 'product':
            if (isset($products[$id])) {
                $product = $products[$id];
                include_once(__DIR__ . "/product.php");   
            } else {
                echo "error1";
            }
            break;
        case 'pages':
            require_once (__DIR__ . "/pages.php");
            break;
        case 'handler':
            include_once(__DIR__ . "/handler.php");
            break; 
        case 'handler_wish':
            include_once(__DIR__ . "/handler_wish.php");
            break; 
        case 'cart':
            include_once(__DIR__ . "/cart.php");
            break;
        case 'wishlist':
            include_once(__DIR__ . "/wishlist.php");
            break;   
        default:
            include_once(__DIR__ . "/products_all.php");
            break;
    }