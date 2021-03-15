
<?php 
require_once "../conexao.php"; 
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$data = $_POST['dataNascimento'];
$profissao = $_POST['profissao'];
$imagem = $_FILES["image"];
$dataNascimento = date("Y-m-d",strtotime(str_replace('/','-',$data)));





$query = "SELECT * FROM   usuarios   WHERE  email ='$email'  AND senha  ='$senha'";


   
// Verificando se campo está nulo.
if($nome == "" || $nome == null){
  echo"<script type='text/javascript'>
  alert('Oops..., Campo nome esta Vazio!');;window.location.href='cadastrar.php';</script>";
}else if($senha == "" || $senha == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo senha deve ser preenchido');window.location.href='cadastrar.php';</script>";
}else if($email == "" || $email == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo email deve ser preenchido');window.location.href='cadastrar.php';</script>";
}else if($dataNascimento == "" || $dataNascimento == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo dataNascimento deve ser preenchido');window.location.href='cadastrar.php';</script>";
}else if($profissao == "" || $profissao == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo profissao deve ser preenchido');window.location.href='cadastrar.php';</script>";
}/*if($imagem == "" || $imagem == null){
 echo"<script type='text/javascript'>
  alert('Oops..., Campo imagem esta Vazio!');;window.location.href='cadastrar.php';</script>";
}*/else{ 
  $uploaddir = '../imagens/users/';
  $uploadfile = $uploaddir.basename($_FILES['image']['name']);

  
  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
   // echo "Imagem enviada com sucesso";

        $query = "INSERT INTO usuarios (nome,senha,email,dataNascimento,profissao,imagem) VALUES ('$nome','$senha','$email','$dataNascimento','$profissao','$imagem')";
     
 
        $query= $pdo->prepare($query);
      
        $query->execute();
         echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../index.php'</script>";

        }else{
        
/*
          echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrar.php'</script>";
*/
        }

      

      }

    ?>

