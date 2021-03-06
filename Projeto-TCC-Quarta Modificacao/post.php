<?php
session_start();
include('verifica_login.php');
?>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/postagem.css" />
        <title>Pagina Inicial teste</title>
    </head>

    <body>
        <div id="menu" class="row text-center ">
            <div class="col-3">
                <a href="pagina.php"><img src="img/home.svg" class="icons"></a>
            </div>
            <div class="col-3">
                <a href="chat.php"><img src="img/chat.svg" class="icons"></a>
            </div>

            <div class="col-3">
                <a href="profissionais.php"><img src="img/quemsomos.svg" class="icons"></a>
            </div>
            <div class="col-3">
                <a href="configuracao.php"><img src="img/euconfig.svg" class="icons"></a>
            </div>
        </div>


        <div class="conteudo">
            <form action="" method="POST" enctype="multipart/form-data">
                <p><input type="text" name="titulo" id="titulo" placeholder="Insira um título" class="form form-control" /></p>
                <p><textarea name="descricao" id="descricao" placeholder="Diga algo sobre esta publicação." class="form form-control"></textarea></p>
                <p class="right"><input type="submit" value="Publicar" class="btn btn-default" /></p>
                <input type="hidden" name="enviar" value="send" />
            </form>
            <?php

            if (isset($_POST['enviar']) && $_POST['enviar'] == "send") {
                $titulo = $_POST['titulo'];
                $conteudo = $_POST['descricao'];
                
                date_default_timezone_set('America/Sao_Paulo');
                $data = date("d/m/Y");
                $hora = date("H:i:s");

                require "conexao.php"; 
                
            
                $query = "INSERT INTO posts (titulo, conteudo, data, hora) VALUES ('$titulo', '$conteudo','$data', '$hora')";
                $stmt = $conexao->prepare($query);
              
                $stmt->execute();
                echo "Publicação inserida com sucesso!";
                if (empty($titulo)) {
                    echo "É obrigatório ter um titulo.";}
            }
         
           
         
            ?>
        </div>



        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>