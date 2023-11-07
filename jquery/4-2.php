<?php
	include('../conexao.php');
	$id = $_POST['codigo'];
	$sql = "SELECT * FROM cliente WHERE id = '{$id}'";
	$query = mysqli_query($con, $sql);
	$arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
	
	echo json_encode($arr);
	
	mysqli_close($con);
?>