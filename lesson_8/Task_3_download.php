<?php
    $dir_img = 'download_img/';
    $img_arr = array_filter(glob($dir_img . '*'), 'is_file');
    $count_img_arr = count($img_arr);
?>
<h3> Загруженные файлы: </h3>
<?for ($i = 0; $i < $count_img_arr; $i++) : ?> 
    <?php
        $explode_name = (explode('/', $img_arr[$i]));
        $img_name = end($explode_name);
    ?>
    <? if (($i+1) % 4 == 0) : ?>
        <div class="clearnone"></div>
    <? endif; ?>
        <div class="img_download">
            <img src="<? echo $img_arr[$i]; ?>" width="150"/>
            <p><? echo $img_name; ?></p>
        </div>
    
<? endfor; ?>