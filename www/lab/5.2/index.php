<!-- ����������� ������ �2
�������� ��� ���������� �� ����� � ������� �� � ���� ��������.
�������� ����� ��� ���������� ������ ������ � ���� � ���������� �� �������.
-->
<?php
require_once $dir_functional . 'model/data base/db.php';
require_once $dir_functional . 'model/model.php';
require_once $dir_functional . 'view/view.php';
if (isset ( $_POST ['submit'] )) {
	$ass_array = readFromPOST_createArray ();
	if ($ass_array === false) {
		echo "<h2>��������� ���!</h2>";
	} else {
		saveToDB ( $ass_array );
	}
}
$monitors = loadFromDB ();
printTable ( $monitors );
include $dir_functional . 'view/form.php';
?>