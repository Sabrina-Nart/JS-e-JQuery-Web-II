<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 12</title>	
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th></th>
					<th>Loja</th>
					<th>Valor</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox" name="item" class="item"></td>
					<td>Americanas</td>
					<td>R$ 972,38</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="item" class="item"></td>
					<td>Carrefour</td>
					<td>R$ 899,95</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="item" class="item"></td>
					<td>Shoptime</td>
					<td>R$ 937,50</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="item" class="item"></td>
					<td>Submarino</td>
					<td>R$ 930,15</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="item" class="item"></td>
					<td>Colombo</td>
					<td>R$ 987,50</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="item" class="item"></td>
					<td>Extra</td>
					<td>R$ 915,50</td>
				</tr>
			</tbody>
		</table>
		<button type="button" id="btn">Excluir</button>
		
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					$('.item').each(function (i) {
						if($(this).is(':checked')) {
							$(this).closest('tr').remove();
						}
					})
				});
			});
		</script>	
	</body>
</html>