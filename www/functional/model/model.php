<?php
function readFromPOST_createArray() {
	$res = array ();
	$brand = htmlspecialchars ( $_POST ['brand'] );
	$model = htmlspecialchars ( $_POST ['model'] );
	$year = htmlspecialchars ( $_POST ['year'] );
	$price = htmlspecialchars ( $_POST ['price'] );
	$date = htmlspecialchars ( $_POST ['date'] );
	$buyer = htmlspecialchars ( $_POST ['buyer'] );
	if (checkDataForMonitor ( $brand, $model, $year, $price, $date, $buyer )) {
		$res ['brand'] = $brand;
		$res ['model'] = $model;
		$res ['year'] = $year;
		$res ['price'] = $price;
		$res ['date'] = $date;
		$res ['buyer'] = $buyer;
		return $res;
	}
	return false;
}
?>