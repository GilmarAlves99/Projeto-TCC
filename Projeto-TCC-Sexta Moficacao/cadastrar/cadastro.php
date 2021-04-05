
<?php
require_once '../view/conexao.php';
$conexao = ConexaoPDO::getInstance();
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$data = $_POST['dataNascimento'];
$tipousuario= $_POST['tipousuario'];
$celular = $_POST['celular'];
$imagem = $_FILES["image"];
$dataNascimento = date("Y-m-d", strtotime($data));

/* Verificando se campo está nulo.
if ($nome == "" || $nome == null) {
  echo "<script type='text/javascript'>
alert('Oops..., Campo nome esta Vazio!');;window.location.href='cadastrar.php';</script>";
} else if ($senha == "" || $senha == null) {
  echo "<script language='javascript' type='text/javascript'>
alert('O campo senha deve ser preenchido');window.location.href='cadastrar.php';</script>";
} else if ($email == "" || $email == null) {
  echo "<script language='javascript' type='text/javascript'>
alert('O campo email deve ser preenchido');window.location.href='cadastrar.php';</script>";
} else if ($dataNascimento == "" || $dataNascimento == null) {
  echo "<script language='javascript' type='text/javascript'>
alert('O campo dataNascimento deve ser preenchido');window.location.href='cadastrar.php';</script>";
} else if ($profissao == "" || $profissao == null) {
  echo "<script language='javascript' type='text/javascript'>
alert('O campo profissao deve ser preenchido');window.location.href='cadastrar.php';</script>";
} else if ($imagem == "" || $imagem == null) {
  echo "<script type='text/javascript'>
alert('Oops..., Campo imagem esta Vazio!');;window.location.href='cadastrar.php';</script>";
}
*/



$con=mysqli_connect("localhost","root","","projetotcc")or die("Não pode conectar");



$consulta = mysqli_num_rows(mysqli_query($con, "SELECT * FROM usuario  WHERE  email='$email'"));

if ($consulta == 0) {

  $extensao = strtolower(substr($_FILES['image']['name'], -4)); // pega a extensao do arquivo
  $novo_nome = md5(time()) . $extensao; // define o nome do arquivo,evitando que tenha asqivos duplicado
  $diretorio = '../imagens/users/'; //diretorio para onde vai o arquivo

  if (move_uploaded_file($_FILES['image']['tmp_name'], $diretorio . $novo_nome)) { // efetua o upload

    $query = "INSERT INTO usuario (nome,senha,email,celular,dataNascimento,tipousuario,imagem) VALUES ('$nome','$senha','$email','$celular','$dataNascimento','$tipousuario','$novo_nome')";


    $query = $conexao->prepare($query);

    $query->execute();
    echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../view/index.php'</script>";
  } else {
  echo "<script language='javascript' type='text/javascript'>alert('Algo deu errado, favor repita o processo!');window.location.href='cadastrar.php'</script>";
  }
} else {
  echo "<script type='text/javascript'>alert('Oops..., usuario já cadastrado!');;window.location.href='cadastrar.php';</script>";
}









?>

