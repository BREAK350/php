<!-- ����������� ������ �3
������� �� ������� ����������� �� ���������� �� ������� � ��������� ������� 
����� ����� �������, �� ������������ � ����.
-->
<?php
// ��������� ���������� �����, ������� ����� � ������, � ������� - ����������.
include $dir_functional . 'load from file/index.php';
// ������� �����.
include $dir_functional . 'sort/index.php';
// ���������� ���� ����� � ������ �������.
include $dir_functional . 'show table/index.php';
// ���������� ������� ����� �����
$only_brand = array ();
for($i = 0; $i < $count_of_monitors; $i ++) {
	$only_brand [$i] = $monitors [$i] [0];
}
$diff_brand = array_count_values ( $only_brand );
?>
<p>������ ����� �����: <?php echo count($diff_brand);?>.</p>