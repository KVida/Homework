<?php
//Пример динамического меню сайта
	header('Content-Type: text/html; charset=utf-8');
	ini_set('display_errors',true);
	error_reporting(E_ALL);

	$leftMenu = array (
		'home' => "indexx.php",
		'about' => "about.php",
		'contacts' => "contact.php",
		'calc' => "cals.php",
	);
?>

<ul>
	<li><a href = '<?=$leftMenu['home']?>'> Домой </a></li>
	<li><a href = '<?=$leftMenu['about']?>'> О нас </a></li>
	<li><a href = '<?=$leftMenu['contacts']?>'> Контакты </a></li>
	<li><a href = '<?=$leftMenu['calc']?>'> Расчёт </a></li>
</ul>