<!-- 
	Перевірка правильності даних про монітори.
-->
<?php
function iscorrect($str) {
	return str != null && str != "";
}
function checkDateB($d) {
	if (date ( 'Y-m-d', strtotime ( $d ) ) == $d) {
		return true;
	}
	return false;
}
function isYear($year) {
	$iv = intval ( $year );
	$arr = getdate ();
	return $iv >= 1900 && $iv <= $arr ['year'];
}
function checkPrice($price) {
	$iv = intval ( $price );
	return strcmp ( "" . $iv, $price ) == 0;
}
function checkDataForMonitor($brand, $model, $year, $price, $date, $buyer) {
	return iscorrect ( $brand ) && iscorrect ( $model ) && iscorrect ( $year ) && iscorrect ( $price ) && iscorrect ( $date ) && iscorrect ( $buyer ) && isYear ( $year ) && checkDateB ( $date ) && checkPrice ( $price );
}
?>