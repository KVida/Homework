<? ob_start(); ?> 
<? require_once "html/function.php"; ?>
<!DOCTYPE>
<html>
    <head>
        <title>Lesson_7</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div class="page"> 
                <header>
                    <div class="logo_header">
                        <a href="index.php">
                            <img src="files/images/cat.png" alt="Logo"/>
                        </a>
                    </div>
                    <nav class="menu_site_header">
                        <? viewMenu($pages); ?>
                        <a class="menu_cart_header" href="?r=cart"> Корзина - <? echo addCart(); ?> </a>
                    </nav>
                </header>
                <aside class="product_categories">
                    <h3>Категории:</h3>
                    <ul>
                        <? $categories_tree = makeTree($categories); ?>
                        <? viewCategories($categories_tree); ?>
                    </ul>
                </aside>
                <div id="content">
                    <? getContent($products); ?>
                </div>
                <footer>
                    <? getFooter(); ?>
                </footer>
            </div>
        </div>
    </body>
</html>