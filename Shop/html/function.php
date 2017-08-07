<?php 
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    include "data/categories.php"; 
    include "data/menu.php"; 
    include "data/products.php";

    /*Построение меню*/
    function viewMenu($pages) {
        if ($pages) {
            echo '<ul>';
            foreach ($pages as $page) {
                if ($page->visible && $page->menu_id == 1) {
                    if($page->url != '') {
                        echo "<li><a href='?r=pages&id=" . $page->id . "'>$page->name</a></li>";
                    }
                }
            }
            echo '</ul>';
        }
    }

    /*Вывод страниц меню навигации*/
    function getPage($pages, $page_id) {
        if ($page_id) {
            return $pages[$page_id];
        }
    }
    function getProduct($products, $id) {
        if ($id) {
            return $products[$id];
        }
    }

    /* КОРЗИНА */
    function addCart() {
        $cart_products = array();
        if (isset($_COOKIE['product_cart'])) {
            $cart_products = unserialize($_COOKIE['product_cart']);

            $number_of_products = count($cart_products);

            switch ($number_of_products) {
                case 1:
                    return $number_of_products . " товар";
                case 21:
                    return $number_of_products . " товар";
                case 2:
                    return $number_of_products . " товарa";
                case 3:
                    return $number_of_products . " товарa";
                case 4:
                    return $number_of_products . " товарa";
                case 22:
                    return $number_of_products . " товарa";
                case 23:
                    return $number_of_products . " товарa";
                default:
                    return $number_of_products . " товаров";
            }
        } else {
            return "0 товаров";
        }  
    }

    /*Построение дерева категорий*/
    function makeTree($categories,$parent_id=0) {
        $results = array();
        if ($categories) {
            foreach ($categories as $key => $category) {
                if ($category->parent_id == $parent_id) {
                    if ($category->id != $parent_id) {
                        $subcategories = makeTree($categories, $category->id);
                        if(!empty($subcategories)) {
                            $category->subcategories = $subcategories ;
                        }
                    }
                $results[] = $category;
                unset($category);
                }
            }
        }
        return $results;
    }

    /*Вывод дерева категорий*/
    function viewCategories($categories) {
        if ($categories) { 
            echo "<ul>";
            foreach ($categories as $category) {
                if ($category->visible) { 
                    echo
                    "<li>
                        <a href='?r=categories&id=" . $category->id . "'>$category->name</a>
                    </li>";
                    if (isset($category->subcategories)) {
                        viewCategories($category->subcategories); 
                    }
                }
            }
            echo "</ul>";
        }
    }
    /*Вывод контента*/

    function getContent($products) {
        include (__DIR__ . "/content.php");
    }

    /*Создание _COOKIE*/
    function setLastVisitData() {
        setcookie('lastVisitPage', $_SERVER['QUERY_STRING'], time()+3600, '/');
        setcookie('lastVisitDate', date('d.m.Y H:i'), time()+3600, '/');
    }

    /* Выовд построение Footer сайта*/
    function getFooter() {
        setLastVisitData();
        if (isset($_COOKIE['lastVisitPage']) && isset($_COOKIE['lastVisitDate'])) {
            $lastVisitPage = $_COOKIE['lastVisitPage'];
            $lastVisitDate = $_COOKIE['lastVisitDate'];   
        }
        include (__DIR__ . "/footer.php");
    } 