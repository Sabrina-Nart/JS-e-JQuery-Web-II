<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercício 08</title>	
	</head>
	<body>
		<form>
			<input type="radio" name="ensino" id="EnsinoFundamental" class="ensino" value="Ensino fundamental" checked="checked">
			<label for="EnsinoFundamental">Ensino fundamental</label><br><br>
			
			<input type="radio" name="ensino" id="EnsinoMedio" class="ensino" value="Ensino médio">
			<label for="EnsinoMedio">Ensino médio</label><br><br>
			
			<input type="radio" name="ensino" id="EnsinoSuperior" class="ensino" value="Ensino superior">
			<label for="EnsinoSuperior">Ensino superior</label><br><br>
			
			<button type="button" id="btn">Ok</button><br><br>
			
			<input type="text" name="texto" id="texto">
		</form>
		<script type="text/javascript" src="../jquery-3.7.0.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#btn').on('click', function () {
					//var texto = '';
					//if($('#EnsinoFundamental').is(':checked')) {
					//	texto = $('#EnsinoFundamental').val();
					//} else if($('#EnsinoMedio').is(':checked')) {
					//	texto = $('#EnsinoMedio').val();					
					//} else if($('#EnsinoSuperior').is(':checked')) {
					//	texto = $('#EnsinoSuperior').val();					
					//}
					//$('#texto').val(texto);
					
					$('.ensino').each(function (i) {
						if($(this).is(':checked')) {
							$('#texto').val($(this).val());
						}
					});
				});
			});
		</script>	
	</body>
</html>