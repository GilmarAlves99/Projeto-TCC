<?php
include_once 'conexao.php';
if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
	require_once 'Usuario.php';
	$u = new Usuario();

	$usuariologado = $u->logged($_SESSION['idUser']);

	$nomeUser = $usuariologado['nome'];
	$emailUser = $usuariologado['email'];
	$profissaoUser = $usuariologado['profissao'];
	$imagemUser = $usuariologado['imagem'];



} else {
	header('Location: index.php');
}

?>