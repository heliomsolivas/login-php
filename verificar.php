<?php
include("conecta.php");
include("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null){
	 header("Location: login.php?login=0");
} else {
	 setcookie("usuario_logado", $usuario["email"]);
	 header("Location: home.php");
}
die();
