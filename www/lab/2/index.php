<!-- ����������� ������ �2
�������� ��� ���������� �� ����� � ������� �� � ���� ��������.
�������� ����� ��� ���������� ������ ������ � ���� � ���������� �� �������.
-->
<?php
require_once $dir_functional . 'model/file/file.php';
require_once $dir_functional . 'model/model.php';
require_once $dir_functional . 'view/view.php';
if (isset ( $_POST ['submit'] )) {
	$ass_array = readFromPOST_createArray ();
	if ($ass_array === false) {
		echo "<h2>�� ������� �������� ��� � ����!</h2>";
	} else {
		saveToFile ( $_SERVER ['DOCUMENT_ROOT'] . '/../data/monitors.txt', $ass_array );
	}
}
$monitors = loadFromFile ( $dir_data . "monitors.txt" );
printTable ( $monitors );
include $dir_functional . 'view/form.php';
?>