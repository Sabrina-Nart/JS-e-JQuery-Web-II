<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 15</title>
	</head>
	<body>
		<select name="clientes" id="clientes">
		</select>
		
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$.ajax({
					url: '15-dados.php',
					method: 'GET'
				}).done(function (dados) {
					var itens = JSON.parse(dados);
					$.each(itens, function (i, v) {
						$('#clientes').append('<option value="' + v.id + '">' + v.nome + '</option>');
					})
				});
			});
		</script>	
	</body>
</html>








