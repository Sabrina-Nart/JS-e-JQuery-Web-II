<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 03</title>	
	</head>
	<body>
		<form>
			<label for="frutas">Frutas</label><br>
			<select name="frutas" id="frutas">
				<option value="Maça">Maça</option>
				<option value="Uva">Uva</option>
				<option value="Laranja">Laranja</option>
				<option value="Pera">Pera</option>
				<option value="Limão">Limão</option>
			</select><br><br>
			
			<button type="button" id="btn">Ok</button><br><br>
			
			<input type="text" name="fruta" id="fruta">
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					var marca = $('#frutas').val();
					$('#fruta').val(marca);
				});
			});
		</script>	
	</body>
</html>