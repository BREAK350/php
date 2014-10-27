<!-- Лабораторна робота №2
Отримати всю інформацію із файлу і вивести її у вікно браузера.
Створити форму для добавлення нового запису у файл і реалізувати її обробку.
-->
<?php
require_once $dir_functional . 'addData.php';
if (isset ( $_POST ['submit'] )) {
	if (($res = addData ()) !== true) {
		?>
<h2><?php echo $res;?></h2>
<?php
	}
}
// створюємо двовимірний масив, рядками якого є записи, а стовпці - атрибутами.
include $dir_functional . 'load from file/index.php';
// відображаємо дані.
include $dir_functional . 'lab/2/index.php';
?>