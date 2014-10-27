<!-- ������� ���-�������.
	������� ������:
		���� ������� ������ ��������� (header), ���� (content) � ������� (footer).
		���� ������ ���� (menu) �� ������� (contents).
		���� ����������� ������ ���������� ����� ��� ���� ����� "laboratory".
		� "laboratory" ������ ���� ����� � ������ "index.php" (��� ����� - �������)
		��� ������ �� ����.
		������ ���� - �� ����� ��������� ����� � ����� "laboratory".
		
		� ������� ������������ ����������� ���� "index.php", �� �����������
		� ���� � ����� �� "laboratory".
-->
<html>
<head>
<title>��������� ������</title>
<link rel="shortcut icon" href="picture/����� ������� 2.svg"
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