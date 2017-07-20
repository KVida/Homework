<?php
	header('Content-Type: text/html; charset=utf-8');
	ini_set('display_errors',true);
	error_reporting(E_ALL);

	/*
	*Получаем текущий час в виде строки от 00 до 23
	*И приводим строку к целому числу от 0 до 23
	*/
	$hour = (int) strftime("%H"); //Форматирует в целое число текущее время с учетом текущих настроек
	//$hour = 12;
	$welcome = "";

	if ($hour >= 0 && $hour < 6) {
		$welcome = "Доброй ночи!";
	} elseif ($hour >= 6 && $hour < 12) {
		$welcome = "Добрый утро!";
	} elseif ($hour >= 12 && $hour < 18) {
		$welcome = "Добрый день!";
	} elseif ($hour >= 18 && $hour < 23) {
		$welcome = "Добрый вечер!";
	} else {
		$welcome = "Доброй ночи!";
	}
?>

<h1> <?php echo $welcome; ?> Гость! </h1>