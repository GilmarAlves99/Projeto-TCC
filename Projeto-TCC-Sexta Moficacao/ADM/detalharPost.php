<?php
require_once '../Controller/UsuarioController.php';


$id_usuario = $_GET['id_usuario'];

//mandando pro meu controller
$post = UsuarioController::listarPostID($id_usuario);

// Verifica se foi feita alguma busca
// Caso contrario, redireciona o visitante pra home





?>
<style>
    h1.titulo {
        text-align: center;
        font-weight: bolder;
        text-shadow: 0px 0px 5px blue;
    }
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<BODY>
    <h1 class="titulo">POSTAGENS DESSE USUARIOS</h1>


    <h1 class="w3-center w3-border-sand">Pesquise pelo ID do post</h1>
    <form style="border:0px" method="POST" action="" class="w3-center">   
    <input class="w3-border" type="number" name="id">
    <input  type="submit"  />    
      
  </form>
<!-- Código PHP -->  


    <table class="w3-table-all w3-hoverable">
        <tr>
            <td>ID da postagem</td>
            <td>Titulo</td>

            <td>Data e Hora</td>
            <td>POSTAGENS</td>
            <td>EXCLUIR</td>
        </tr>
        <?php



        foreach ($post as $dados) {

        ?>
            <tr>
                <td> <?php echo $dados['idPost']; ?> </td>
                <td><?php echo $dados['titulo']; ?> </td>
                <td><?php echo $dados['dataTimePost']; ?> </td>
                <td><?php echo $dados['descricao']; ?> </td>
                <td> <a href="excluirPostagem.php?idPost=<?= $dados['idPost']; ?>">
                        <img src="../img/excluir.png" style="position:relative;left:10px;text-align:center;width:50px;height:50px;">
                    </a>
                </td>
            </tr>
        <?php


        }

        ?>
    </table>
</BODY>

</html>