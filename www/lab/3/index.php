<!-- ����������� ������ �3
������� �� ������� ����������� �� ���������� �� ������� � ��������� ������� 
����� ����� �������, �� ������������ � ����.
-->
<?php
require_once $dir_functional . 'model/file/file.php';
require_once $dir_functional . 'model/model.php';
require_once $dir_functional . 'view/view.php';
// ��������� ���������� �����, ������� ����� � ������, � ������� - ����������.
$monitors = loadFromFile ( $dir_data . "monitors.txt" );
// ������� �����.
sortMonitors ( $monitors );
// ���������� ���� ����� � ������ �������.
printTable ( $monitors );
?>
<p>������ ����� �����: <?php echo getCountOfDifferentBrand($monitors);?>.</p>