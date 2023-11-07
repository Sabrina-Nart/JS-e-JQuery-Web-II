<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 01</title>	
	</head>
	<body>
		<form>
			<label for="texto">Texto</label><br>
			<input type="text" name="texto" id="texto"><br><br>
			
			<button type="button" id="btn">Ok</button>
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					var texto = $('#texto').val();
					alert(texto);
				});
			});
		</script>	
	</body>
</html>