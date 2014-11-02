<?php
/**
 * read data of monitors from file.
 */
function loadFromFile($fileName) {
	$monitors = file ( $fileName );
	// ������ ������� �������� � ����� (������� ����� ��� ������).
	$count_of_monitors = count ( $monitors );
	// ����� ����� ��������� �� ����� �� ���������. ����� �����
	// �������� ���������� �����.
	for($i = 0; $i < $count_of_monitors; $i ++) {
		$monitors [$i] = explode ( "\t", $monitors [$i] );
	}
	return $monitors;
}
function saveToFile($fileName, $ass_array) {
	$file = fopen ( $fileName, 'a' );
	$record = $ass_array ['brand'] . "\t";
	$record = $record . $ass_array ['model'] . "\t";
	$record = $record . $ass_array ['year'] . "\t";
	$record = $record . $ass_array ['price'] . "\t";
	$record = $record . $ass_array ['date'] . "\t";
	$record = $record . $ass_array ['buyer'] . "\n";
	fwrite ( $file, $record );
	fclose ( $file );
}
?>