<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 02</title>	
	</head>
	<body>
		<form>
			<label for="marcas">Marcas</label><br>
			<select name="marcas" id="marcas">
				<option value="FORD">FORD</option>
				<option value="GM">GM</option>
				<option value="FIAT">FIAT</option>
				<option value="KIA">KIA</option>
				<option value="PEUGEOT">PEUGEOT</option>
			</select><br><br>
			
			<button type="button" id="btn">Ok</button>
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					var marca = $('#marcas').val();
					alert(marca);
				});
			});
		</script>	
	</body>
</html>