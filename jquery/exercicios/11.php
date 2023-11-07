<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 11</title>	
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Serviço</th>
					<th>Valor</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>MONTAGEM DE MICRO</td>
					<td>R$ 80,00</td>
					<td><span class="excluir">X</span></td>
				</tr>
				<tr>
					<td>LIMPEZA COMPLETA</td>
					<td>R$ 60,00</td>
					<td><span class="excluir">X</span></td>
				</tr>
				<tr>
					<td>LIMPEZA SIMPLES</td>
					<td>R$ 30,00</td>
					<td><span class="excluir">X</span></td>
				</tr>
				<tr>
					<td>INSTALAÇÃO DO WINDOWS ( INSTALAÇÃO SIMPLES )</td>
					<td>R$ 40,00</td>
					<td><span class="excluir">X</span></td>
				</tr>
				<tr>
					<td>INSTALAÇÃO DO WINDOWS ( COMPLETA )</td>
					<td>R$ 80,00</td>
					<td><span class="excluir">X</span></td>
				</tr>
				<tr>
					<td>BACKUP DE DADOS</td>
					<td>R$ 40,00</td>
					<td><span class="excluir">X</span></td>
				</tr>
			</tbody>
		</table>
		
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('.excluir').on('click', function () {
					$(this).closest('tr').remove();
				});
			});
		</script>	
	</body>
</html>