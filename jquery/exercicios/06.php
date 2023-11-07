<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 06</title>	
	</head>
	<body>
		<form>
			<label for="texto">Texto</label><br>
			<input type="text" name="texto" id="texto"><br><br>
			
			<button type="button" id="btn">Ok</button><br><br>
			
			<select name="marcas" id="marcas">
				<option value="Apple">Apple</option>
				<option value="Microsoft">Microsoft</option>
				<option value="Google">Google</option>
				<option value="Amazon">Amazon</option>
				<option value="Facebook">Facebook</option>
			</select>
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					var texto = $('#texto').val();
					var item = $('#marcas option[value="' + texto + '"]');
					if(item.length > 0) {
						item.prop('selected', true);
					} else {
						alert('Item não encontrado');
					}
				});
			});
		</script>	
	</body>
</html>