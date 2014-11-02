<!-- Лабораторна робота №2
Отримати всю інформацію із файлу і вивести її у вікно браузера.
Створити форму для добавлення нового запису у файл і реалізувати її обробку.
-->
<?php
require_once $dir_functional . 'model/data base/db.php';
require_once $dir_functional . 'model/model.php';
require_once $dir_functional . 'view/view.php';
if (isset ( $_POST ['submit'] )) {
	$ass_array = readFromPOST_createArray ();
	if ($ass_array === false) {
		echo "<h2>Некоректні дані!</h2>";
	} else {
		saveToDB ( $ass_array );
	}
}
$monitors = loadFromDB ();
printTable ( $monitors );
include $dir_functional . 'view/form.php';
?>