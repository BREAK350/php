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
if (isset ( $_POST ['submit'] )) {
	$search_text = $_POST ['textSearch'];
	// ���� ���� �����, �� ����� �� ���������.
	$length = (strlen ( $search_text ) > 0) ? (true) : (false);
	// ��������� ���������� �����, ������� ����� � ������, � ������� - ����������.
	include $dir_functional . 'load from file/index.php';
	$j = 0;
	// ����� ��� ������� �������.
	$new_arr = array ();
	if ($length === true) {
		for($i = 0; $i < $count_of_monitors; $i ++) {
			// ���� ��������� �������, �� ������ ���� � ����� �����.
			if (mb_stripos ( $monitors [$i] [5], $search_text ) !== false) {
				$new_arr [$j] = $monitors [$i];
				$j ++;
			}
		}
	}
	$count_of_monitors = $j;
	$monitors = $new_arr;
	// ���������� ���� ����� � ������ �������.
	include $dir_functional . 'show table/index.php';
} else {
	?>
	��� ����������� ����� ��� �������, �������� �������� �������� ����!
	<?php
}
?>