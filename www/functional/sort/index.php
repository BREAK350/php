<!-- ���������� ������ (���������, �� ����� ��� �����������).
������������ �� ���������� �� �������.
-->
<?php
// �������� ������� ���� ������.
function comparePrice($a, $b) {
	$ia = intval ( $a [3] );
	$ib = intval ( $b [3] );
	return $ia - $ib;
}
// ������� �����.
usort ( $monitors, "comparePrice" );
?>
