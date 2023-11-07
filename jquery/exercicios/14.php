<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 14</title>
	</head>
	<body>
		<select name="pagina" id="pagina">
			<option value="14-home.php">Home</option>
			<option value="14-empresa.php">Empresa</option>
			<option value="14-produtos.php">Produtos</option>
			<option value="14-servicos.php">Serviços</option>
		</select>
		<div class="conteudo"></div>
		
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			function buscar(link) {
				$.ajax({
					url: link,
					method: 'GET'
				}).done(function(data) {
					$('.conteudo').html(data);
				});
			}
			$(document).ready(function () {
				$('#pagina').on('change', function() {
					var link = $(this).val();
					buscar(link);
				});
				
				buscar($('#pagina').val());
			});
		</script>	
	</body>
</html>








