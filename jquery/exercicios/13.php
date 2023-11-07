<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 13</title>
		<style type="text/css" rel="stylesheet">
			button {
				width: 39px;
			}
			#calculo {
				text-align: right;
			}
		</style>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th colspan="4"><input type="text" name="calculo" id="calculo"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><button type="button" class="numerico">7</button></td>
					<td><button type="button" class="numerico">8</button></td>
					<td><button type="button" class="numerico">9</button></td>
					<td><button type="button" class="operacoes">+</button></td>
				</tr>
				<tr>
					<td><button type="button" class="numerico">4</button></td>
					<td><button type="button" class="numerico">5</button></td>
					<td><button type="button" class="numerico">6</button></td>
					<td><button type="button" class="operacoes">-</button></td>
				</tr>
				<tr>
					<td><button type="button" class="numerico">3</button></td>
					<td><button type="button" class="numerico">2</button></td>
					<td><button type="button" class="numerico">1</button></td>
					<td><button type="button" class="operacoes">*</button></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="button" class="numerico">0</button></td>
					<td></td>
					<td><button type="button" class="operacoes">/</button></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><button type="button" class="resultado">=</button></td>
				</tr>
			</tbody>
		</table>
		
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				var calculo = '';
				var operacao = '';
				var primeiro = false;
				$('.numerico').on('click', function () {
					if (primeiro) {
						$('#calculo').val('');
						primeiro = false;
					}
					
					var valor = $(this).html();
					var atual = $('#calculo').val();
					if(!(atual == '' & valor == '0')) {
						$('#calculo').val(atual + valor);
					}
				});
				$('.operacoes').on('click', function () {
					var atual = $('#calculo').val();
					if(atual != '') {
						operacao = $(this).html();
						calculo = atual;
						primeiro = true;
					}
				});
				$('.resultado').on('click', function () {
					var atual = $('#calculo').val();
					if(atual != '') {
						var retorno = 0
						if(operacao == '+') {
							retorno = parseFloat(calculo) + parseFloat(atual);
						} else if(operacao == '-') {
							retorno = parseFloat(calculo) - parseFloat(atual);
						} else if(operacao == '*') {
							retorno = parseFloat(calculo) * parseFloat(atual);
						} else if(operacao == '/') {
							retorno = parseFloat(calculo) / parseFloat(atual);
						}
						$('#calculo').val(retorno);
						calculo = retorno;
						primeiro = true;
					} else {
						alert('Digite um número para continuar!');
					}
				});
			});
		</script>	
	</body>
</html>








