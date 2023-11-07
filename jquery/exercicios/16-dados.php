<?php
	include('../../conexao.php');
	$id = $_GET['id'];
	$sql = "SELECT id, nome FROM cliente_dependente WHERE id_cliente = {$id}";
	$query = mysqli_query($con, $sql);
	
	$lista = [];
	while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$lista[] = $arr;
	}
	echo json_encode($lista);
	
	mysqli_close($con);
?>