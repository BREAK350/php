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
// Порівнюєм вартості двох записів.
function comparePrice($a, $b) {
	$ia = intval ( $a [3] );
	$ib = intval ( $b [3] );
	return $ia - $ib;
}
// Сортуємо масив.
function sortMonitors($monitors) {
	usort ( $monitors, "comparePrice" );
}
// Обчисляємо кількість різних марок.
function getCountOfDifferentBrand($monitors) {
	$count_of_monitors = count ( $monitors );
	$only_brand = array ();
	for($i = 0; $i < $count_of_monitors; $i ++) {
		$only_brand [$i] = $monitors [$i] [0];
	}
	$diff_brand = array_count_values ( $only_brand );
	return count ( $diff_brand );
}
function getSearchedMonitors($monitors, $searched) {
	// масив для шуканих моніторів.
	$new_arr = array ();
	// якщо поле пусте, то пошук не здійснюємо.
	$length = (strlen ( $searched ) > 0) ? (true) : (false);
	if ($length === true) {
		$j = 0;
		$count_of_monitors = count ( $monitors );
		for($i = 0; $i < $count_of_monitors; $i ++) {
			// якщо знайдений підрядок, то додаємо його в новий масив.
			if (mb_stripos ( $monitors [$i] [5], $searched ) !== false) {
				$new_arr [$j] = $monitors [$i];
				$j ++;
			}
		}
	}
	return $new_arr;
}
?>