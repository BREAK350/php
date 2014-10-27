<?php
include_once $dir_functional . 'checkData.php';
function addData() {
	if (writeInFile () === true) {
		return true;
	} else {
		return "Не вдалося записати дані у файл!";
	}
}
function writeInFile() {
	// Зчитуєм дані з адресного рядка.
	$brand = htmlspecialchars ( $_POST ['brand'] );
	$model = htmlspecialchars ( $_POST ['model'] );
	$year = htmlspecialchars ( $_POST ['year'] );
	$price = htmlspecialchars ( $_POST ['price'] );
	$date = htmlspecialchars ( $_POST ['date'] );
	$buyer = htmlspecialchars ( $_POST ['buyer'] );
	// якщо усі дані добрі ...
	if (checkDataForMonitor ( $brand, $model, $year, $price, $date, $buyer )) {
		// Зберігаєм у файл
		writeInFileOnParts ( $brand, $model, $year, $price, $date, $buyer );
		return true;
	}
	return false;
}
function writeInFileOnParts($brand, $model, $year, $price, $date, $buyer) {
	$fileAddress = $_SERVER ['DOCUMENT_ROOT'] . '/../data/monitors.txt';
	$file = fopen ( $fileAddress, 'a' );
	$record = $brand . "\t" . $model . "\t" . $year . "\t" . $price . "\t" . $date . "\t" . $buyer . "\n";
	fwrite ( $file, $record );
	fclose ( $file );
}
?>