<?php
	include('../../conexao.php');
	$sql = "SELECT id, nome FROM cliente";
	$query = mysqli_query($con, $sql);
	
	$lista = [];
	while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$lista[] = $arr;
	}
	echo json_encode($lista);
	
	mysqli_close($con);
?>