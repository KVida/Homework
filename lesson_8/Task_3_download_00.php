<?php
	$ext = array("png", "gif","jpg","jpeg");
    $dir_img = 'download_img/';
    $img_arr = array_filter(glob($dir_img . '*'), 'is_file');
    $count_img_arr = count($img_arr);
	$number_img = 0;
	$j = 0;
?>
<h3> Загруженные файлы: </h3>
<?for ($i = 0; $i < $count_img_arr; $i++) : ?> 
    <?php
        $explode_name = (explode('/', $img_arr[$i]));
        $img_name = end($explode_name);
		
		$ext_point = (explode(".", $imgs['name'][$i]));
        $ext_img = end($ext_point); 
    ?>
	<? if (in_array($ext_img, $ext)) : ?>
		<? if (($number_img+1) % 4 == 0) : ?>
			<div class="clearnone"></div>
		<? endif; ?>
			<div class="img_download">
				<img src="<? echo $img_arr[$i]; ?>" width="150"/>
				<p><? echo $img_name; ?></p>
			</div>
		<? else :?>
			<? $j++; ?>
    <? endif; ?>
<? endfor; ?>
<?php
	if ($j == 0) {
		echo "<div>Нет загруженных файлов.</div>";
	} 
?>
