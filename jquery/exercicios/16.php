<?php
	include('../../conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 16</title>
	</head>
	<body>
		<select name="clientes" id="clientes">
			<?php
				$sql = "SELECT * FROM cliente";
				$query = mysqli_query($con, $sql);
				while ($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			?>
			<option value="<?php echo $arr['id']; ?>"><?php echo $arr['nome']; ?></option>
			<?php
				}
			?>
		</select><br><br>
		
		<select name="dependentes" id="dependentes">
		</select>
		
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			function dependentes() {
				var id = $('#clientes').val();
				$.ajax({
					url: '16-dados.php',
					method: 'GET',
					data: {
						id: id
					}
				}).done(function(dados) {
					$('#dependentes').empty();
					var itens = JSON.parse(dados);
					$.each(itens, function(i, v){
						$('#dependentes').append('<option value="' + v.id + '">' + v.nome + '</option>');
					});
				});
			}
			
			$(document).ready(function () {
				$('#clientes').on('change', function () {
					dependentes();
				});
				
				dependentes();
			});
		</script>	
	</body>
</html>
<?php
	mysqli_close($con)
?>







