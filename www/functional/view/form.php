<!-- Форма для введення даних про монітори.
-->
<form name="formMonitor" action="" method="post"
	onSubmit="validForm(this); return false;">
	<table>
		<tr>
			<td>Марка</td>
			<td><input type="text" name="brand"></td>
		</tr>
		<tr>
			<td>Модель</td>
			<td><input type="text" name="model"></td>
		</tr>
		<tr>
			<td>Рік випуску</td>
			<td><input type="text" name="year"></td>
		</tr>
		<tr>
			<td>Вартість</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td>Дата продажу</td>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<td>Прізвище і ім'я покупця</td>
			<td><input type="text" name="buyer"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>

</form>