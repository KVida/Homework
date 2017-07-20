<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>DZ-3 Task_10</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <h1></h1>
            </header>

            <aside>
                <h2 class="h2_title">Каталог товаров:</h2>
            </aside>
            
            <? include("index.php"); ?>
            
            <div id="container">
                <div class="inner">
                    <? if($products) :?>
                        <ul class="clearfix">
                        <? $i = 0; ?>
                            <? foreach ($products as $product) :?>
                                <? if($product->visible):?>
                                    <li class="product_item">
                                        <div class="image"></div>
                                        <div class="product_name">                                   
                                            <a href="<? echo $product->url ?>">
                                                <? echo $product->name ?>
                                            </a>
                                        </div> 
                                        <div class="price">
                                            Цена товара = <? echo $product->variants[0]->price ?>
                                        </div>
                                        <div class="stock">
                                            Колличесво товаров - <? echo $product->variants[0]->stock ?>шт 
                                        </div>    
                                    </li>
                                <? endif; ?>

                                <? $i++; ?>
                                <? if (!($i % 3)) :?>
                                    <br>
                                <? endif; ?>
                            <? endforeach; ?>
                        </ul>
                    <? endif; ?>
                </div>
            </div>

            <footer>
                <p></p>    
            </footer>
        </div>
    </body>
</html>