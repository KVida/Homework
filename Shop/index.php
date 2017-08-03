<!DOCTYPE>
<html>
    <head>
        <title>Lesson_6</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div class="page">
                <? include "html/function.php"; ?>
                <header>
                    <div class="logo_header">
                        <img src="files/images/cat.png" alt="Logo"/>
                    </div>
                    <nav class="menu_site_header">
                        <? viewMenu($pages); ?>
                    </nav>
                </header>
                <aside class="product_categories">
                    <h3>Категории:</h3>
                    <ul>
                        <? viewCategories($categories); ?>
                    </ul>
                </aside>
                <div id="content">
                    <? getContent($products); ?>
                </div>
                <footer>
                    <p> 2017 </p>
                </footer>
            </div>
        </div>
    </body>
</html>