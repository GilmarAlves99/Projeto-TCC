<?php
include_once 'conexao.php';
if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
	require_once '../Model/UsuarioModel.php';
	$usuario = new UsuarioModel();

	$usuariologado = $usuario->logged($_SESSION['idUser']);



}else {
	header('Location: View/index.php');
}

?>