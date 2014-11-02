<!-- Лабораторна робота №3
Вивести усі монітори впорядковані за зростанням їх вартості й обчислити кількість 
різних марок моніторів, що зустрічаються у файлі.
-->
<?php
require_once $dir_functional . 'model/file/file.php';
require_once $dir_functional . 'model/model.php';
require_once $dir_functional . 'view/view.php';
// створюємо двовимірний масив, рядками якого є записи, а стовпці - атрибутами.
$monitors = loadFromFile ( $dir_data . "monitors.txt" );
// сортуємо масив.
sortMonitors ( $monitors );
// відображаємо вміст файлу у вигляді таблиці.
printTable ( $monitors );
?>
<p>Всього різних марок: <?php echo getCountOfDifferentBrand($monitors);?>.</p>