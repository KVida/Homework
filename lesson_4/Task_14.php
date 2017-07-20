<!DOCTYPE>
<html>
    <head>
        <title/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Table_1</title>
        <style>
            body {
                font-family : Georgia, 'Times New Roman', Times, serif;
                font-size : 20px;
                text-align : center;
                margin : 0 auto;
                padding : 0;
                width : 900px;
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
                width : 200px;  
            }

            .menu_site {
                position: static;
                height: 100px;
                float: none;
                margin-top: -20px;
                padding: 0;
                margin-left: 260px;
            }

            .product_categories, .content {
                height : 500px;
                margin : 0 auto;
                padding : 0;
                border : 1px solid black;
            }

            .product_categories {
                width : 300px;
                float : left;
            }

            li {
                list-style: none;
            }

            ul {
                margin-left : 0; 
                padding-left : 0; 
            }

            .content {
                float : none;
                margin-left: 303px;
            }

            footer {
                height : 50px;
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
                    <div class = "menu_site">
                        <p>Меню сайта</p>
                    </div>
                </header>
                <aside class="product_categories">
                     <ul>
                        <li>sidebar</li>
                        <li>Левый блок</li>
                        <li>обычно категории товаров</li>
                    </ul>
                </aside>
                <div class="content">
                    <div class="inner">
                        <p>Контент</p>
                        <p>Тут будет вывод товаров</p>
                    </div>
                </div>
                <footer>
                    <p>Футер (подвал) сайта</p>    
                </footer>
            </div>
        </div>
    </body>
</html>