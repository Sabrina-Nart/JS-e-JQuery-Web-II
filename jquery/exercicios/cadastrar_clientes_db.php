<?php
	include('../../conexao.php');

	$nome     = $_POST['nome'];
	$email    = $_POST['email'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$cpf      = $_POST['cpf'];
	$status   = $_POST['status'];
	
	$sql = "INSERT INTO cliente VALUES (null, '{$nome}', '{$email}', '{$endereco}', '{$telefone}', '{$cpf}', '{$status}')";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		$arr['tipo'] = 'erro';
		$arr['msg'] = mysqli_error($con);
	} else {
		$arr['tipo'] = 'ok';
		$arr['msg'] = 'Cliente cadastrado com sucesso! Novo cliente código: ' . mysqli_insert_id($con);
	}
