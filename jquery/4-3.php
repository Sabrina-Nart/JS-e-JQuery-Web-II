<?php
	include('../conexao.php');
	$id = $_POST['codigo'];
	$sql = "SELECT * FROM cliente_dependente WHERE id_cliente = '{$id}'";
	$query = mysqli_query($con, $sql);
	
	$lista = [];
	while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$lista[] = $arr;
	}
	
	echo json_encode($lista);
	
	mysqli_close($con);
?>