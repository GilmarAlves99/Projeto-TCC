
<?php 
require_once "conexao/ConexaoPDO.php"; 
$titulo = $_POST['titulo'];
$id_autor = $_POST['id_autor'];
$descricao = $_POST['descricao'];

$conexao = ConexaoPDO::getInstance();

// Verificando se campo está nulo.
if($titulo == "" || $titulo == null){
  echo"<script type='text/javascript'>
  alert('Oops..., Campo titulo esta Vazio!');;window.location.href='post.php';</script>";
}else if($id_autor == "" || $id_autor == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo id_autor deve ser preenchido');window.location.href='post.php';</script>";
}else if($descricao == "" || $descricao == null){
  echo"<script language='javascript' type='text/javascript'>
  alert('O campo descricao deve ser preenchido');window.location.href='post.php';</script>";
}


else{ 
$data = date("d/m/Y");
        $query = "INSERT INTO postagem (titulo,descricao,data,id_autor) VALUES ('$titulo','$descricao','$data','$id_autor')";
        $stmt = $conexao->prepare($query);
      
  
      
        $stmt->execute();
       
          echo "<script language='javascript' type='text/javascript'>alert('Postagem enviada sucesso!');window.location.href='titulo.php'</script>";

        }/*else{

         // echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrar.php'</script>";

        }*/

      

    

    ?>

