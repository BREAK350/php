<!-- ������� ������ ���� -->
<?php
// ������ ������� ����� (�����) � ��������.
$number_of_directs = count ( $directs );
// �������� � 2, �� ����� ��� �������� �� "." � "..".
for($i = 2; $i < $number_of_directs; $i ++) {
	$direct = $directs [$i];
	// ������ ����� ��� ������ ���� (��� �����).
	$class = "lab";
	// ���� ��������� �������� $dir_for_contents ������� ��������� ������ ����,
	// �� ������ ��� ����� �������� (��������).
	if ($direct == $dir_for_contents) {
		$class = $class . " selected";
	} else {
		// ������ - ����������.
		$class = $class . " not_selected";
	}
	// ��� ������� ������ ���� ������ ���� ���������� ���� (onclick) ���
	// �������� �� ���������� ��������.
	$onclick = "load('lymarenko','" . $direct . "')";
	?>
<div class="<?php echo $class; ?>" onclick="<?php echo $onclick;?>">
			<?php echo $direct;?></div>
<br>
<?php
}
?>