<?php
/**
 * print table into web-page.
 */
function printTable($monitors) {
	$count_of_monitors = count ( $monitors );
	if ($count_of_monitors == 0) {
		echo "Нема даних про монітори.";
	} else {
		// Інакше, створюємо таблицю.
		?>
<table border="">
	<tr>
		<th>Марка</th>
		<th>Модель</th>
		<th>Рік випуску</th>
		<th>Вартість</th>
		<th>Дата продажу</th>
		<th>Прізвище і ім'я покупця</th>
	</tr>
	<?php
		for($i = 0; $i < $count_of_monitors; $i ++) {
			?>
		<tr>
		<?php
			for($j = 0; $j < 6; $j ++) {
				?>
			<td><?php echo $monitors[$i][$j];?></td>
			<?php
			}
			?>
		</tr>
		<?php
		}
		?>
</table>
<?php
	}
}
?>