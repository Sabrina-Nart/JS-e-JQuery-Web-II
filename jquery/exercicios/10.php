<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 10</title>	
	</head>
	<body>
		<form>
			<select name="marca" id="marca">
				<option value="FORD">FORD</option>
				<option value="GM">GM</option>
				<option value="FIAT">FIAT</option>
				<option value="KIA">KIA</option>
				<option value="PEUGEOT">PEUGEOT</option>
			</select><br><br>
			
			<input type="text" name="busca" id="busca"><br>
			<button type="button" id="btn">Buscar</button>
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					var busca = $('#busca').val();
					var item = $('#marca option[value="' + busca + '"]');
					if(item.length > 0) {
						item.prop('selected', true);
					} else {
						alert('Marca "' + busca + '" não encontrada!');
					}
				});
			});
		</script>	
	</body>
</html>