<!-- Головна веб-сторінка.
	Принцип роботи:
		Дана сторінка містить заголовок (header), вміст (content) і кінцівку (footer).
		Вміст містить меню (menu) та контент (contents).
		Меню створюється шляхом зчитування даних про вміст папки "laboratory".
		В "laboratory" повинні бути папки з файлом "index.php" (без нього - помилка)
		або взагалі не бути.
		Пункти меню - це назви вкладених папок в папці "laboratory".
		
		В контенті відображається сформований файл "index.php", що знаходиться
		в одній з папок із "laboratory".
-->
<html>
<head>
<title>Лимаренко Дмитро</title>
<link rel="shortcut icon" href="picture/джава логотип 2.svg"
	type="image/png">

<link rel="stylesheet" type="text/css" href="style/style.css">
<script src="js/js.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php include_once 'directory.php';?>
<body>

	<div class="header shadow">
		<?php include 'header.php';?>
	</div>
	<div class="content shadow">
		<?php include 'content.php';?>
	</div>
	<div class="footer shadow">
		<?php include 'footer.php';?>
	</div>

</body>
</html>