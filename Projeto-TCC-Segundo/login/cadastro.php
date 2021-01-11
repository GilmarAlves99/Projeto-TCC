

<?php 
require_once "../conexao/ConexaoPDO.php"; 
$login = $_POST['login'];
$senha = ($_POST['senha']);
$email = $_POST['email'];
$idade = ($_POST['idade']);
//$query_select = "SELECT login FROM usuarios WHERE login = '$login'";

$conexao = ConexaoPDO::getInstance();
$query = "INSERT INTO usuarios(login,senha,email,idade) VALUES (:x, :y, :z, :w)";
$stmt = $conexao->prepare($query);
$stmt->bindvalue("x", $login,PDO::PARAM_STR);
$stmt->bindvalue("y", $senha, PDO::PARAM_STR);
$stmt->bindvalue("z", $email, PDO::PARAM_STR);
$stmt->bindvalue("w", $idade, PDO::PARAM_STR);
$stmt->execute();

  if($login == " " || $login == null){

    echo "<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastrar.php';</script>";

    }
    /*else{

      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastrar.php';</script>";

        die();

 

      }else{ 

        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";

        $insert = mysqli_query($query,$connect);

        if($insert){

          echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";

        }else{

         // echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrar.php'</script>";

        }

      }

    }*/

    ?>

