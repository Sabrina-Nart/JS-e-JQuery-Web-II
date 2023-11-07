<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Cadastrar Clientes</title>
	</head>
	<body>
		<form>
			<label for="nome">Nome</label><br>
			<input type="text" name="nome" id="nome" maxlength="50"><br><br>
			
			<label for="email">E-mail</label><br>
			<input type="text" name="email" id="email" maxlength="40"><br><br>
			
			<label for="endereco">Endereço</label><br>
			<input type="text" name="endereco" id="endereco" maxlength="100"><br><br>
			
			<label for="telefone">Telefone</label><br>
			<input type="text" name="telefone" id="telefone" maxlength="11"><br><br>
			
			<label for="cpf">CPF</label><br>
			<input type="text" name="cpf" id="cpf" maxlength="11"><br><br>
			
			<label for="status">Status</label><br>
			<select name="status" id="status">
				<option value="A">Ativo</option>
				<option value="I">Inativo</option>
			</select><br><br>
			
			<button type="button" id="cadastrar">Cadastrar</button>
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">			
			$(document).ready(function () {
				$('#cadastrar').on('click', function() {
					$.ajax({
						url: 'cadastrar_clientes_db.php',
						method: 'POST',
						data: {
							nome: $('#nome').val(),
							email: $('#email').val(),
							endereco: $('#endereco').val(),
							telefone: $('#telefone').val(),
							cpf: $('#cpf').val(),
							status: $('#status').val(),
						}
					}).done(function (dados) {
						var item = JSON.parse(dados);
						alert(item.msg);
						if(item.tipo == 'ok') {
							window.open('listar_clientes.php');
						}
					});
				});
			});
		</script>
	</body>
</html>









