<?php
/**
 * read data of monitors from file.
 */
function loadFromDB() {
	$monitors = array ();
	if (($link_id = mysql_connect ()) !== false) {
		mysql_select_db ( "monitors", $link_id );
		if (($result_id = mysql_query ( "select * from monitor;" )) !== false) {
			$n = mysql_num_rows ( $result_id );
			for($i = 0; $i < $n; $i ++) {
				$row = mysql_fetch_row ( $result_id );
				$monitors [$i] = $row;
			}
		}
		mysql_close ( $link_id );
	}
	return $monitors;
}
function saveToDB($ass_array) {
	if (($link_id = mysql_connect ()) !== false) {
		if(mysql_select_db ( "monitors", $link_id )===false){
			echo "mysql_select_db invalid";
		}
		$record = "insert into monitor ('brand', 'model', 'year', 'price' ,'date' ,'buyer' ) values (";
		$record = $record . "'" . $ass_array ['brand'] . "',";
		$record = $record . "'" . $ass_array ['model'] . "',";
		$record = $record . "'" . $ass_array ['year'] . "',";
		$record = $record . "'" . $ass_array ['price'] . "',";
		$record = $record . "'" . $ass_array ['date'] . "',";
		$record = $record . "'" . $ass_array ['buyer'] . "');";
		if (mysql_query ( $record, $link_id ) === false) {
			echo "fuck " . mysql_error ();
		}
		mysql_close ( $link_id );
	} else {
		echo "bad connection!!!";
	}
}
?>