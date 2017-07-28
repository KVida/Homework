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
                
                margin : 0 auto;
                padding : 0;
                width : 1020px; 
                /*width : 65%;*/
            }
            #wrapper {
                margin : 5px 0;
            }

            header {
                height : 100px;
                border : 1px solid black;
                text-align : center;
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
                padding : 3px;
               
            }

            .menu_site_header ul a,.menu_site_header ul a:before {
                display : block;
                margin : 0;
                padding : 3px 20px;
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
                width : 250px;
                /*width : 28.25%;*/
                float : left;
            }
            .product_categories ul {
                width:200px;
                padding-left: 23px;
                margin-top: 5px;
                margin-bottom: 0;
                /*text-align : left;*/
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
                width : 766px;
                /*width : 71%;*/
                float : none;
                /*margin-left : 28.75%;*/
                margin-left : 252px;
                text-align : center;

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
                text-align : center;
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
                    <pre>
                         
                        <?php
                            function GetCategoriesTree($categories,$parent_id=0) {   
                                $results=array();
                                if ($categories) {
                                    echo "<ul>";
                                    foreach ($categories as $key => $category) {
                                        if ($category->parent_id == $parent_id) {
                                            $result=new stdClass();
                                            $result = $category;

                                            echo "<li><a href='#'>$category->name</a></li>";
                                            if ($category->id!=$parent_id) 
                                                $result->subcategories = GetCategoriesTree($categories,$category->id);
                                                $results[]=$result;
                                                unset($result);
                                        }
                                    }
                                    echo "</ul>";        
                                }
                                return $results;
                            }

$clear_categories = 'a:16:{i:0;O:8:"stdClass":20:{s:2:"id";s:2:"54";s:9:"parent_id";s:1:"0";s:3:"url";s:17:"tehnika-dlya-doma";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"54";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:18:43";s:4:"name";s:30:"Техника для дома";s:7:"name_h1";s:0:"";s:10:"meta_title";s:30:"Техника для дома";s:13:"meta_keywords";s:30:"Техника для дома";s:16:"meta_description";s:30:"Техника для дома";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:1;O:8:"stdClass":20:{s:2:"id";s:2:"59";s:9:"parent_id";s:1:"0";s:3:"url";s:16:"detskie-igrushki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"59";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:00";s:4:"name";s:29:"Детские игрушки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Детские игрушки";s:13:"meta_keywords";s:29:"Детские игрушки";s:16:"meta_description";s:29:"Детские игрушки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:2;O:8:"stdClass":20:{s:2:"id";s:2:"62";s:9:"parent_id";s:1:"0";s:3:"url";s:8:"gadzhety";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"62";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:22";s:4:"name";s:14:"Гаджеты";s:7:"name_h1";s:0:"";s:10:"meta_title";s:14:"Гаджеты";s:13:"meta_keywords";s:14:"Гаджеты";s:16:"meta_description";s:14:"Гаджеты";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:3;O:8:"stdClass":20:{s:2:"id";s:2:"68";s:9:"parent_id";s:1:"0";s:3:"url";s:15:"mebel-dlya-doma";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"68";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:35";s:4:"name";s:28:"Мебель для дома";s:7:"name_h1";s:0:"";s:10:"meta_title";s:28:"Мебель для дома";s:13:"meta_keywords";s:28:"Мебель для дома";s:16:"meta_description";s:28:"Мебель для дома";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:4;O:8:"stdClass":20:{s:2:"id";s:2:"55";s:9:"parent_id";s:2:"54";s:3:"url";s:15:"vodonagrevateli";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"55";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:18:43";s:4:"name";s:30:"Водонагреватели";s:7:"name_h1";s:0:"";s:10:"meta_title";s:30:"Водонагреватели";s:13:"meta_keywords";s:30:"Водонагреватели";s:16:"meta_description";s:30:"Водонагреватели";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:5;O:8:"stdClass":20:{s:2:"id";s:2:"58";s:9:"parent_id";s:2:"54";s:3:"url";s:20:"radiatory-otopleniya";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"58";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:37:"Радиаторы отопления";s:7:"name_h1";s:0:"";s:10:"meta_title";s:37:"Радиаторы отопления";s:13:"meta_keywords";s:37:"Радиаторы отопления";s:16:"meta_description";s:37:"Радиаторы отопления";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:6;O:8:"stdClass":20:{s:2:"id";s:2:"56";s:9:"parent_id";s:2:"55";s:3:"url";s:15:"gazovye-kolonki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"56";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:29:"Газовые колонки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Газовые колонки";s:13:"meta_keywords";s:29:"Газовые колонки";s:16:"meta_description";s:29:"Газовые колонки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:7;O:8:"stdClass":20:{s:2:"id";s:2:"57";s:9:"parent_id";s:2:"55";s:3:"url";s:7:"bojlery";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"57";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:14:"Бойлеры";s:7:"name_h1";s:0:"";s:10:"meta_title";s:14:"Бойлеры";s:13:"meta_keywords";s:14:"Бойлеры";s:16:"meta_description";s:14:"Бойлеры";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:8;O:8:"stdClass":20:{s:2:"id";s:2:"60";s:9:"parent_id";s:2:"59";s:3:"url";s:16:"detskie-mashinki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"60";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:45";s:4:"name";s:29:"Детские машинки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Детские машинки";s:13:"meta_keywords";s:29:"Детские машинки";s:16:"meta_description";s:29:"Детские машинки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:9;O:8:"stdClass":20:{s:2:"id";s:2:"61";s:9:"parent_id";s:2:"59";s:3:"url";s:16:"myagkie-igrushki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"61";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-21 16:37:10";s:4:"name";s:27:"Мягкие игрушки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:27:"Мягкие игрушки";s:13:"meta_keywords";s:27:"Мягкие игрушки";s:16:"meta_description";s:27:"Мягкие игрушки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:10;O:8:"stdClass":20:{s:2:"id";s:2:"63";s:9:"parent_id";s:2:"62";s:3:"url";s:9:"smartfony";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"63";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:22";s:4:"name";s:18:"Смартфоны";s:7:"name_h1";s:0:"";s:10:"meta_title";s:18:"Смартфоны";s:13:"meta_keywords";s:18:"Смартфоны";s:16:"meta_description";s:18:"Смартфоны";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:11;O:8:"stdClass":20:{s:2:"id";s:2:"65";s:9:"parent_id";s:2:"62";s:3:"url";s:9:"planshety";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"65";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:23";s:4:"name";s:16:"Планшеты";s:7:"name_h1";s:0:"";s:10:"meta_title";s:16:"Планшеты";s:13:"meta_keywords";s:16:"Планшеты";s:16:"meta_description";s:16:"Планшеты";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:12;O:8:"stdClass":20:{s:2:"id";s:2:"64";s:9:"parent_id";s:2:"63";s:3:"url";s:6:"xiaomi";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"64";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:45";s:4:"name";s:6:"Xiaomi";s:7:"name_h1";s:0:"";s:10:"meta_title";s:6:"Xiaomi";s:13:"meta_keywords";s:6:"Xiaomi";s:16:"meta_description";s:6:"Xiaomi";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:13;O:8:"stdClass":20:{s:2:"id";s:2:"67";s:9:"parent_id";s:2:"63";s:3:"url";s:5:"meizu";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"67";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:44";s:4:"name";s:5:"Meizu";s:7:"name_h1";s:0:"";s:10:"meta_title";s:5:"Meizu";s:13:"meta_keywords";s:5:"Meizu";s:16:"meta_description";s:5:"Meizu";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:14;O:8:"stdClass":20:{s:2:"id";s:2:"66";s:9:"parent_id";s:2:"65";s:3:"url";s:6:"lenovo";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"66";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:44";s:4:"name";s:6:"Lenovo";s:7:"name_h1";s:0:"";s:10:"meta_title";s:6:"Lenovo";s:13:"meta_keywords";s:6:"Lenovo";s:16:"meta_description";s:6:"Lenovo";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:15;O:8:"stdClass":20:{s:2:"id";s:2:"69";s:9:"parent_id";s:2:"68";s:3:"url";s:13:"kreslo-meshok";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"69";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-21 17:17:08";s:4:"name";s:23:"Кресло мешок";s:7:"name_h1";s:0:"";s:10:"meta_title";s:23:"Кресло мешок";s:13:"meta_keywords";s:23:"Кресло мешок";s:16:"meta_description";s:23:"Кресло мешок";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}}';

    $categories_data = unserialize($clear_categories);
    GetCategoriesTree($categories_data);
?>
                        
                    </pre>
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