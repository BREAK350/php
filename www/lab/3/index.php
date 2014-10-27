<!-- Лабораторна робота №3
Вивести усі монітори впорядковані за зростанням їх вартості й обчислити кількість 
різних марок моніторів, що зустрічаються у файлі.
-->
<?php
// створюємо двовимірний масив, рядками якого є записи, а стовпці - атрибутами.
include $dir_functional . 'load from file/index.php';
// сортуємо масив.
include $dir_functional . 'sort/index.php';
// відображаємо вміст файлу у вигляді таблиці.
include $dir_functional . 'show table/index.php';
// Обчисляємо кількість різних марок
$only_brand = array ();
for($i = 0; $i < $count_of_monitors; $i ++) {
	$only_brand [$i] = $monitors [$i] [0];
}
$diff_brand = array_count_values ( $only_brand );
?>
<p>Всього різних марок: <?php echo count($diff_brand);?>.</p>