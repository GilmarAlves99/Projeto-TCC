<?php


if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
	require_once 'conexao.php';
	require_once '../Model/UsuarioModel.php';
	// chamando a função Usuario
	$u = new UsuarioModel();

	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	if ($u->login($email, $senha) == true) { // chamando a funcao login
		if (isset($_SESSION['idUser'])) { // se existir
			header("location: pagina.php");
		} else {
			header("location: ../cadastrar/cadastrar.php");
		}
	} else if ($email == 'ADM@2021' && $senha == '11101999') {
		header("location: ../ADM/tabelaUsuarios.php");
	} else {
		header("location: ../cadastrar/cadastrar.php");
	}
} else {
	header("location: ../cadastrar/cadastrar.php");
}
?>