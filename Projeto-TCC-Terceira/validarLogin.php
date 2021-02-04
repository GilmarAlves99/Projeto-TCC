<?php

require_once 'conexao/ConexaoPDO.php';
//Verifica se as variáveis existem 
if (isset($_POST['login'], $_POST['senha'])) {
    //verifica se estão com valores
    if ($_POST['login'] != "" and $_POST['senha'] != "") {
        //recebe os dados
        $login = $_POST['login'];
        $senha = $_POST['senha'];
      
        $email = $_POST['email'];
        //Realizando a Conexao com o banco de dados
        $conexao = ConexaoPDO::getInstance();

        //Preparando a Consulta
        $query = "SELECT * FROM usuarios where login=:login";
        $statement = $conexao->prepare($query);
        $statement->bindValue("login", $login, PDO::PARAM_STR);

        //EXECUTANDO A CONSULTA E RETORNADO O OBJETO
        $statement->execute();
        $usuario=$statement->fetchObject();
       

        //verifica se os dados digitados conferem
           if ($login == $usuario->login and $senha == $usuario->senha) {
       // if ($login == "login@login.com" and $senha == "1234") {
            //recebe os dados
            session_start();
            $_SESSION['login'] = $login;   $email = $_POST['email'];
           //$senha = md5($_POST['senha']);
            //Direciona para páginaRestrita.php
           echo "<script>location.href='pagina.php'</script>";
        } else {
           //Direciona para Logina.php
       echo "<script>location.href='login/cadastrar.php'</script>";
        }
    } else {
        //Direciona para Logina.php
    echo "<script>location.href='login/cadastrar.php'</script>";
    }
} else {
    //Direciona para Index.php
 echo "<script>location.href='inicio/index.php'</script>";
}
?>