<!-- ����������� ������ �2
�������� ��� ���������� �� ����� � ������� �� � ���� ��������.
�������� ����� ��� ���������� ������ ������ � ���� � ���������� �� �������.
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
// ��������� ���������� �����, ������� ����� � ������, � ������� - ����������.
include $dir_functional . 'load from file/index.php';
// ���������� ���.
include $dir_functional . 'lab/2/index.php';
?>