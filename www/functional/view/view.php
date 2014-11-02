<?php
/**
 * print table into web-page.
 */
function printTable($monitors) {
	$count_of_monitors = count ( $monitors );
	if ($count_of_monitors == 0) {
		echo "���� ����� ��� �������.";
	} else {
		// ������, ��������� �������.
		?>
<table border="">
	<tr>
		<th>�����</th>
		<th>������</th>
		<th>г� �������</th>
		<th>�������</th>
		<th>���� �������</th>
		<th>������� � ��'� �������</th>
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