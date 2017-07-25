<!DOCTYPE>
<html>
    <head>
        <title/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Table_1</title>
        <style>
            body {
                font-family : Georgia, 'Times New Roman', Times, serif;
                font-size : 18px;
                text-align : center;
                margin : 0 auto;
                padding : 0;
                /*width : 1010px; */
                width : 65%;
            }

            header {
                height : 100px;
                border : 1px solid black;
            }

            .logo {
                background : #A55;
                float : left;
                margin : 5px;
                padding : 25px;
                width : 20%;  
            }

            .menu_site_header {
                position : static;
                height : 100px;
                float : none;
                margin-top : -16px;
                padding : 0;
                margin-left : 260px;
            }

            .menu_site_header ul {
                list-style : none;
                font-size : 12pt;
                color : #000;
                padding : 0;
                text-transform : uppercase;
                overflow : hidden;
            }

            .menu_site_header ul li {
                float : left;
                padding : 5px;
               
            }

            .menu_site_header ul a,.menu_site_header ul a:before {
                display : block;
                margin : 0;
                padding : 5px 23px;
                margin-top : 12px;
                background : #900;
                color : #fff;
                text-transform : none;
                line-height : 50px;
                
                position : relative;
                transition : all 0.3s case-in-out;
            }

            .product_categories, .content {
                height : 1400px;
                max-height : auto;
                margin-top : -300px;
                margin : 0 auto;
                padding : 0;
                border : 1px solid black;
            }

            .product_categories {
                /*width : 250px;*/
                width : 28.25%;
                float : left;
            }

            .inner li {
                list-style : none;
            }

            .product_name li a {
                white-space : nowrap;
                width : 100px;
            }

            .inner ul {
                list-style : none;
                padding : 0;
                margin : auto;
            }
            
            .product_item {
                float : left;
                padding : 12px;
                margin : 12px;
            }

            .image_date, .product_article_num {
                text-align : right;
                font-size : 8pt;
                display : block;
            }
           
            .image {
                background : #AAA;
                height : 175px;
                width : 200px;
            }

            p {
                margin : 0;
                padding : 0;
            }

            .product_name,
            .price { 
                text-align : center;
                font-size : 10pt; 
                margin : 0 auto;
            }
            .product_name {
                word-wrap : break-word;
                width : 180px;
            }

            .preview_select {
                display : block;

            }

            .variants_price {
                float : left;
            }

            .stock { 
                text-align : right;
                font-size : 10pt;
            }

            .content {
                /*width : 756px;*/
                width : 71%;
                float : none;
                margin-left : 28.75%;

            }

            .line {
                height :320px;
                float : none;
                /*clear:both;*/                
            }
            .product_line {
                display : inline;
                position : relative;
                text-align : center;
                height : 320px;
                float : left;
            }
            .product_article_num, .stock {
                height : 16px;
            }

            footer {
                height : 50px;
                text-align : center;
                font-size : 16px;
                border : 1px solid black;
            }
        </style>
    </head>
    <body>
        <div id = "wrapper">
            <div class = "page">
                <header>
                    <div class = "logo">
                        <img src = "" alt = "Logo"/>
                    </div>
                    <nav class = "menu_site_header">
                        <ul>
                            <? include("menu.php"); ?>
                            <? if ($menu): ?>
                                <? foreach ($menu as $item): ?>
                                    <? if ($item -> visible): ?>
                                        <? if ($item -> menu_id == 1): ?>
                                            <li class="menu_item">
                                                <a href="<? echo $item -> url ?>"> <? echo $item -> name ?></a>
                                            </li>
                                        <? endif; ?>
                                    <? endif; ?>
                                <? endforeach; ?>
                            <? endif; ?>
                        </ul>
                    </nav>
                </header>
                <aside class="product_categories">
                     <ul>
                        <li>sidebar</li>
                        <li>Левый блок</li>
                        <li>обычно категории товаров</li>
                    </ul>
                </aside>
                <? include("products.php"); ?>
                <div class="content">
                    <div class="inner">
                        <p>Контент</p>
                        <p>Тут будет вывод товаров</p>

                        <? if($products) :?>
                            <ul class="clearfix">
                                <? $i = 0; ?>
                                <? foreach ($products as $product) :?>
                                    <? if($product->visible):?>
                                        <? if ($product->variants[0]->stock > 0) :?>
                                            <? ++$i; ?>
                                            <? if (($i % 4)) :?>
                                            <div class="product_line">
                                                <li class="product_item">
                                                    <div class="image">
                                                        <span class="image_date"><?php echo date('m.d.y',strtotime($product -> created)); ?></span>
                                                        <img src="<? echo $product->image->filename ?>" alt="<? echo $product->image->filename ?>">  
                                                    </div>
                                                    <div class="product_name">                                   
                                                        <a href="<? echo $product->url ?>">
                                                            <? echo $product->name ?>
                                                        </a>
                                                    </div>
                                                    <div class="product_article"> 
                                                        <? if ($product->image->position > 0) :?>
                                                                <span class="product_article_num">#<? echo $product->image->position ?></span>
                                                            <? else : ?>
                                                                <span class="product_article_num">#</span>
                                                        <? endif; ?>
                                                    </div>
                                                    <div class="price">
                                                        <p> Цена товара = <? echo ceil($product -> variant -> price); ?> </p>
                                                        <? if (count($product -> variants) > 1): ?>
                                                            <p class="variants_price">Другие варианты:</p>                                
                                                            <select class="preview_select">
                                                                <? foreach ($product -> variants as $item) :?>
                                                                    <? if ($item -> id != $product -> variant -> id): ?>
                                                                        <option><? echo $product -> variants[0] -> name . " = " . ceil($item -> price); ?> грн.</option>
                                                                    <? endif; ?>
                                                                <? endforeach; ?>
                                                            </select>                                                        
                                                        <? endif; ?>
                                                    </div>
                                                    
                                                    <div class="stock">
                                                        <p> Колличесво товаров - <? echo $product->variants[0]->stock ?> шт </p>
                                                    </div>       
                                                </li>
                                            </div>
                                            <? else: ?>    
                                                    <div class="line"></div>
                                            <? endif; ?> 
                                        <? endif; ?>
                                    <? endif; ?>                                   
                                <? endforeach; ?>
                            </ul>
                        <? endif; ?>
                    </div>
                </div>
                <footer>
                    <p>Футер (подвал) сайта</p>    
                </footer>
            </div>
        </div>
    </body>
</html>