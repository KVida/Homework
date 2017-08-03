<?php 
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    include "data/categories.php"; 
    include "data/menu.php"; 
    include "data/products.php";

    /*Построение меню*/
    function viewMenu($pages) {
        if($pages) {
            echo '<ul>';
            foreach ($pages as $page) {
                if ($page->visible && $page->menu_id == 1) {
                    if($page->url != '') {
                        echo "<li><a href='?r=pages&id=".$page->id."'>$page->name</a></li>";
                    }
                }
            }
            echo '</ul>';
        }
    }

    /*Построение дерева категорий*/
    function makeTree($categories,$parent_id=0) {
        $results=array();
        if ($categories) {
            foreach ($categories as $key => $category) {
                if ($category->parent_id==$parent_id) {
                    if ($category->id!=$parent_id) {
                        $subcategories = makeTree($categories,$category->id);
                        if(!empty($subcategories))
                            $category->subcategories = $subcategories ;
                    }
                    $results[]=$category;
                    unset($category);
                }
            }
        }
        return $results;
    }
    /*Вывод дерева категорий*/
    function viewCategories($categories) {
        if($categories) { 
            echo "<ul>";
            foreach ($categories as $category) {
                if($category->visible) { 
                    echo
                    "<li>
                        <a href='?r=categories&id=".$category->id."'>$category->name</a>
                    </li>";
                    if(isset($category->subcategories)) {
                        viewCategories($category->subcategories); 
                    }
                }
            }
            echo "</ul>";
        }
    }
    /*Вывод контента*/

    function getContent($products) {
        include "html/content.php";  
    } 