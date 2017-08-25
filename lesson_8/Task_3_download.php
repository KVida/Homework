<?php
    $dir_img = 'download_img/';
    $img_arr = array_filter(glob($dir_img . '*'), 'is_file');
    $count_img_arr = count($img_arr);
?>
<h3> Загруженные файлы: </h3>
<?for ($i = 0; $i < $count_img_arr; $i++) : ?> 
    <?php
        $img_ext = pathinfo($img_arr[$i],PATHINFO_EXTENSION); 
        $img_name = pathinfo($img_arr[$i], PATHINFO_FILENAME);
    ?>
    <? if (($i+1) % 4 == 0) : ?>
        <div class="clearnone"></div>
    <? endif; ?>
        <div class="img_download">
            <img src="<? echo $img_arr[$i]; ?>" width="150"/>
            <p><? echo $img_name . '.' . $img_ext; ?></p>
        </div>
    
<? endfor; ?>