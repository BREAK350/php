<!-- ����������� ������ �4 
� ����� ��������� ���� �������. ������� � ���� �������� ���������� ��� 
�� �������, ������� �������� ���� ������ ����� �������.
-->
<form name="formMonitor" action="" method="post">
	<input type="text" name="textSearch"
		value="<?php echo $_POST ['textSearch'];?>"> <input type="submit"
		name="submit" value="�����">

</form>
<hr>
<?php
require_once $dir_functional . 'model/file/file.php';
require_once $dir_functional . 'model/model.php';
require_once $dir_functional . 'view/view.php';

if (isset ( $_POST ['submit'] )) {
	$searched = $_POST ['textSearch'];
	$monitors = loadFromFile ( $dir_data . "monitors.txt" );
	$diff_monitors = getSearchedMonitors ( $monitors, $searched );
	printTable ( $diff_monitors );
} else {
	?>
	��� ����������� ����� ��� �������, �������� �������� �������� ����!
	<?php
}
?>