<? ob_start(); ?>
<!DOCTYPE>
<html>
    <head>
        <title>Lesson 8/Task 1</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="filemanagerStyle.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div class="upload_img">
                <h3>Загрузка изображений к товару</h3>
                <h4>Загрузите фото</h4>
                <p>Максимальное колличество передаваемых файлов = 20шт.</p>
                <? include "Task_3_form.php"; ?>
            </div>
            <div class="download_img">
                <? include "Task_3_download.php"; ?>
            </div>
            <div class="clearboth"></div>
        </div>
    </body>
</html>