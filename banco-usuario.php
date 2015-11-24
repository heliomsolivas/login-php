<?php

function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$query = "select * from usuarios where email = '{$email}' and senha = '{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function buscaDados($conexao, $placa, $nome, $carro, $modelo, $cor, $ano, $autorizacao){
	$query_verifica = "select*from dados_compilados;"
	$resultado_verifica = mysqli_query($conexao, $query_verifica);
	$dados = mysqli_fetch_assoc($resultado_verifica);
	return $dados;
}
