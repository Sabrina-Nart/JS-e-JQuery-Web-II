<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 09</title>	
	</head>
	<body>
		<form>
			<ol>
			</ol>
			
			<button type="button" id="btn">Adicionar</button>
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				//var i = 0;
				//$('#btn').on('click', function () {
				//	$('ol').append('<li>' + (++i) + '</li>');
				//});
				
				$('#btn').on('click', function () {
					var i = $('ol li').length + 1;
					$('ol').append('<li>' + i + '</li>');
				});
			});
		</script>	
	</body>
</html>