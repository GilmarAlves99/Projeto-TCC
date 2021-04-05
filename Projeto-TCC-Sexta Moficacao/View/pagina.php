<?php
include_once 'verifica.php';
if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
    require_once 'conexao.php';
    require '../Controller/UsuarioController.php';
    $postagens = UsuarioController::listarPostagens();
    $usuario = UsuarioController::logged($_SESSION['idUser']);




?>
    <?php
    if (isset($_POST['comentario'])) {

        $comentario = $_POST['comentario'];
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/Y");
        $hora = date("H:i");


        if (empty($comentario)) {
            echo "Escreva um comentario!";
        } else {
            $conexao = ConexaoPDO::getInstance();
            $query = "INSERT INTO comentarios (id_post,nome,imagemDoUsuario,comentario,data,hora) VALUES (:idPost,:nome,:imagemDoUsuario,:comentario,'$data','$hora') ";
            $stmt = $conexao->prepare($query);

            $stmt->bindValue('idPost', $_POST['idPost'], PDO::PARAM_INT);
            $stmt->bindValue('nome', $usuario['nome'], PDO::PARAM_STR);
            $stmt->bindValue('imagemDoUsuario', $usuario['imagem'], PDO::PARAM_STR);
            $stmt->bindValue('comentario', $comentario, PDO::PARAM_STR);

            $stmt->execute();
        }
    }


    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
        <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@100&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/paginainicial.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">



        <title>Pagina Inicial teste</title>
    </head>

    <body>
        <div class="content">
            <div id="menu" class="row text-center ">
                <div class="col-4">
                    <a href="#"><img src="../img/home.svg" class="icons"></a>
                </div>
                <!-- <div class="col-3">
            <a href="chat.php"><img src="img/chat.svg" class="icons"></a>
        </div>
-->
                <div class="col-4">
                    <a href="profissionais.php"><img src="../img/quemsomos.svg" class="icons"></a>
                </div>
                <div class="col-4">
                    <a href="configuracao.php"><img src="../img/euconfig.svg" class="icons"></a>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="conteudo">


                <?php
                foreach ($postagens as $dados) {




                ?>
                    <div class="postagem">
                        <div class="row">
                            <div class="col">

                                <p class='nomes text-center'>
                                    <?= $dados['nome'];  ?>
                                    <?php
                                   
                                    if($dados['tipousuario'] == 'Profissional'){
                                        echo "<img src='../img/profissional.png' style='width:20px;height:20px;'>";
                                    } ?>
                                    <b>ID #</b> <?= $dados['id_usuario']; ?>
                                </p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="../imagens/users/<?php echo $dados['imagem']; ?>" class="mt-2 usuarios">

                            </div>


                            <div class="col-7 posts">
                                <?php

                                echo "<p class='text-center titulo mt-4'>" . $dados['titulo'] .  "</p>";
                                ?>
                            </div>
                            <div class="col-2 text-center">
                                <a class="active" href="javascript:void(0)" onclick="openNav()"><i class="fas fa-ellipsis-v"></i></a>

                            </div>
                        </div>
                        <div class="row  posts">
                            <div class="col mt-3">

                                <p class="descricao text-left">
                                    <?= $dados['descricao']; ?> </p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="text-right">
                                    <?= $dados['dataTimePost']; ?>
                                </p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="blocoIcones">
                                        <input type="hidden" name="idPost" value="<?= $dados['idPost']; ?>">
                                        <input type="text" name="comentario" class="form form-control">

                                        <button id="iconLike"></button>
                                        <button id="iconDeslike"></button>
                                        <button type="submit" id="iconComent"></button>

                                    </div>
                                </form>

                            </div>
                        </div>

                        <?php

                        $con = mysqli_connect("localhost", "root", "", "projetotcc") or die("Não pode conectar");



                        $seleciona = mysqli_query($con, "SELECT * FROM comentarios where id_post = '$dados[idPost]' order by id desc");
                        $conta = mysqli_num_rows($seleciona);

                        /*echo "<pre>";
                        var_dump($conta);
                        echo "</pre>";*/
                        if ($conta <= 0) {
                            echo "Seja o primeiro a comentar !";
                        } else {
                            while ($row = mysqli_fetch_array($seleciona)) {
                                $nome = $row['nome'];
                                $imagemDoUsuario = $row['imagemDoUsuario'];
                                $comentario = $row['comentario'];
                                $data = $row['data'];
                                $hora = $row['hora'];

                        ?>
                                <!-- COMENTARIO -->
                                <div class="comentario mt-2 txt">


                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <img src="../imagens/users/<?php echo $imagemDoUsuario; ?>" class="mt-2 usuarioComentFoto">

                                        </div>
                                        <div class="col-8 mt-4 center">

                                            <?php echo "<b> " . $data .
                                                " ás " . $hora . " </b>" ?>


                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col text-center">
                                            <?php echo "<b>Nome: </b>" . $nome ?>
                                        </div>



                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">

                                            <?php echo "<b> Comentario: </b>" . $comentario ?>


                                        </div>

                                    </div>




                                </div>
                        <?php
                            }
                        }

                        ?>
                    </div>


                    <HR class="divisoria">


                <?php

                }
                ?>
            </div>


            <!-- Menu Lateral -->
            <div class="sidenav" id="sidenav">
                <div class="padding">
                    <div class="row">
                        <div class="col-12 text-center padding">

                            <a href="pagina.php" onclick="javascript:window.close()"><i class="center fas fa-sign-out-alt">Sair</i> </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 text-center">

                            <img src="../img/lixeira.svg" class="icons">
                        </div>
                        <div class="col-7">
                            <p class="text-big text-white">
                                <a href="excluirPostagem.php?idPost=<?$postagens['idPost']; ?>">
                                    Apagar </a>
                            </p>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-5 text-center">
                            <img src="../img/denunciar.svg" class="icons">
                        </div>
                        <div class="col-7 text-big text-white  padding">
                            Denunciar
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <footer class="center">

            <a href="post.php"><img src="../img/post3.png"></a>

        </footer>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>

        <script>
            function openNav() {
                document.getElementById("sidenav").style.bottom = "0%";
                document.getElementById("sidenav").style.width = "100%";
                document.getElementById("sidenav").style.height = "150px";
                document.getElementById("sidenav").style.position = "fixed";

            }

            function closeNav() {

                document.getElementById("sidenav").style.width = "0";
                document.getElementById("sidenav").style.height = "0";
            }
        </script>
    </body>

    </html>
<?php
} else {
    header('Location: index.php');
}
?>