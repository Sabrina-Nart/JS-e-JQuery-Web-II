<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 05</title>	
	</head>
	<body>
		<form>
			<label for="texto">Texto</label><br>
			<input type="text" name="texto" id="texto"><br><br>
			
			<button type="button" id="btn">Ok</button><br><br>
			
			<ul>
				<li></li>
			</ul>
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					var texto = $('#texto').val();
					if(texto != '') {
						$('ul li').html(texto);
					} else {
						alert('Campo não foi preenchido');
					}
				});
			});
		</script>	
	</body>
</html>