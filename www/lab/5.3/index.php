<!-- ����������� ������ �3
������� �� ������� ����������� �� ���������� �� ������� � ��������� ������� 
����� ����� �������, �� ������������ � ����.
-->
<?php
require_once $dir_functional . 'model/data base/db.php';
require_once $dir_functional . 'model/model.php';
require_once $dir_functional . 'view/view.php';
// ��������� ���������� �����, ������� ����� � ������, � ������� - ����������.
$monitors = loadFromDB ();
// ������� �����.
sortMonitors ( $monitors );
// ���������� ���� ����� � ������ �������.
printTable ( $monitors );
?>
<p>������ ����� �����: <?php echo getCountOfDifferentBrand($monitors);?>.</p>