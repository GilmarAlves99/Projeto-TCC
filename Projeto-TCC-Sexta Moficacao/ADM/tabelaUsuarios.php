<?php

require '../Controller/UsuarioController.php';


$usuarios = UsuarioController:: listarusuario()

/*
echo "<pre> <H1>POSTAGENS </H1><BR>";
var_dump($postagens);
echo "</pre>";
echo "<pre> <H1>USUARIOS</H1><BR>";
var_dump($usuarios);
echo "</pre>";
*/
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />

    <title>GERENCIAMENTO DE USUARIOS</title>

<style>
h1.titulo{
    text-align:center;
    font-weight:bolder;
    text-shadow: 0px 0px 5px blue;
}

</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<BODY>
<h1 class="titulo" >GERENCIAMENTO DE USUARIOS</h1>
<p style="margin-right:20px;text-align:right;color:red;">*Para excluir o usuario verifique se existe postagens dele*</p>
<table  class="w3-table-all w3-hoverable">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>IMAGEM</td>
        <td>POSTAGENS</td>
        <td>EXCLUIR</td>
    </tr>

    <?php
     
     
     
    foreach ($usuarios as $registro => $usuarios) {
      
    ?>
        <tr>
            <td> <?php echo $usuarios['id_usuario']; ?> </td>
            <td> <?php echo $usuarios['nome'];?> </td>
            <td> <?php echo $usuarios['email']; ?> </td>
            <td> <img src="../imagens/users/<?php echo $usuarios["imagem"]; ?> " width="150px" height="150px">  </td>
            <td>
            <a href="detalharPost.php?id_usuario=<?=$usuarios['id_usuario'];?>">

                <img src="../img/visualizar.png" style="position:relative;left:10px;text-align:center;width:70px;height:70px;">
            </a></td>
            <td>
            <a href="excluirUsuario.php?id_usuario=<?=$usuarios['id_usuario'];?>">
            <img src="../img/excluir.png" style="position:relative;left:10px;text-align:center;width:70px;height:70px;">
                </a>

            
        <?php } ?>

</table>  
</BODY>
</html>
