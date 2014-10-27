<!-- Лабораторна робота №4 
У форму вводиться набір символів. Вивести у вікно браузера інформацію про 
усі монітори, прізвища покупців яких містять задані символи.
-->
<form name="formMonitor" action="" method="post">
	<input type="text" name="textSearch"
		value="<?php echo $_POST ['textSearch'];?>"> <input type="submit"
		name="submit" value="Пошук">

</form>
<hr>
<?php
if (isset ( $_POST ['submit'] )) {
	$search_text = $_POST ['textSearch'];
	// якщо поле пусте, то пошук не здійснюємо.
	$length = (strlen ( $search_text ) > 0) ? (true) : (false);
	// створюємо двовимірний масив, рядками якого є записи, а стовпці - атрибутами.
	include $dir_functional . 'load from file/index.php';
	$j = 0;
	// масив для шуканих моніторів.
	$new_arr = array ();
	if ($length === true) {
		for($i = 0; $i < $count_of_monitors; $i ++) {
			// якщо знайдений підрядок, то додаємо його в новий масив.
			if (mb_stripos ( $monitors [$i] [5], $search_text ) !== false) {
				$new_arr [$j] = $monitors [$i];
				$j ++;
			}
		}
	}
	$count_of_monitors = $j;
	$monitors = $new_arr;
	// відображаємо вміст файлу у вигляді таблиці.
	include $dir_functional . 'show table/index.php';
} else {
	?>
	Для відображення даних про монітори, заповніть попереднє текстове поле!
	<?php
}
?>