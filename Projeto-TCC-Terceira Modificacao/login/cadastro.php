
<?php 
require_once "../conexao/ConexaoPDO.php"; 
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$imagem = $_FILES["image"];
//$query_select = "SELECT login FROM usuarios WHERE login = '$login'";

$conexao = ConexaoPDO::getInstance();
$query = "SELECT login FROM usuarios WHERE login = '$login','$email'";


   
// Verificando se campo está nulo.
if($login == "" || $login == null){
  echo"<script type='text/javascript'>
  alert('Oops..., Campo Login esta Vazio!');;window.location.href='cadastrar.php';</script>";
}else if($senha == "" || $senha == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo senha deve ser preenchido');window.location.href='cadastrar.php';</script>";
}else if($email == "" || $email == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo email deve ser preenchido');window.location.href='cadastrar.php';</script>";
}else if($idade == "" || $idade == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo idade deve ser preenchido');window.location.href='cadastrar.php';</script>";
}/*if($imagem == "" || $imagem == null){
 echo"<script type='text/javascript'>
  alert('Oops..., Campo imagem esta Vazio!');;window.location.href='cadastrar.php';</script>";
}*/else{ 
  $uploaddir = '../imagens/users/';
  $uploadfile = $uploaddir.basename($_FILES['image']['name']);

  
  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
   // echo "Imagem enviada com sucesso";
  
        $query = "INSERT INTO usuarios (login,senha,email,idade,imagem) VALUES ('$login','$senha','$email','$idade','$imagem')";
        $stmt = $conexao->prepare($query);
      
        $stmt->execute();
       
          echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";

        }else{

          echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrar.php'</script>";

        }

      

      }

    ?>

