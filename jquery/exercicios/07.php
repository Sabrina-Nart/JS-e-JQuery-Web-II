<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 07</title>	
	</head>
	<body>
		<form>
			<input type="checkbox" name="marcado" id="marcado"> <label for="marcado">Marcado</label><br><br>
			
			<button type="button" id="btn">Ok</button><br><br>
			
			<input type="text" name="texto" id="texto">
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					var marcado = $('#marcado').is(':checked');
					if(marcado) {
						$('#texto').val('Verdadeiro');
					} else {
						$('#texto').val('Falso');
					}
				});
			});
		</script>	
	</body>
</html>