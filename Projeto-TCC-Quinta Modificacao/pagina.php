<?php
include_once 'verifica.php';
if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
    $consulta = "SELECT * FROM tb_postagens";
    $conexecao = $pdo->query($consulta) or die($mysqli->error);

?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@100&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/paginaInicial.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.min.css">



        <title>Pagina Inicial teste</title>
    </head>

    <body>

        <div id="menu" class="row text-center ">
            <div class="col-4">
                <a href="#"><img src="img/home.svg" class="icons"></a>
            </div>
            <!-- <div class="col-3">
            <a href="chat.php"><img src="img/chat.svg" class="icons"></a>
        </div>
-->
            <div class="col-4">
                <a href="profissionais.php"><img src="img/quemsomos.svg" class="icons"></a>
            </div>
            <div class="col-4">
                <a href="configuracao.php"><img src="img/euconfig.svg" class="icons"></a>
            </div>
        </div>



        <div class="conteudo">


            <?php
            while ($dado = $conexecao->fetch()) {
               
            ?>
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo $usuariologado ?>" class="usuarios">
                </div>
                <div class="col-7">
                    <p class="nomes text-center">
                        <?php echo $nomeUser
                            . "</br>" . $profissaoUser . "<br>";
                        ?>

                    </p>
                </div>
                <div class="col-2">
                    <a class="active" href="javascript:void(0)" onclick="openNav()"><i class="fas fa-ellipsis-v"></i></a>

                </div>
            </div>
                <div class="row">
                    <div class="col-12 postagem">
                        <?php

                        echo "<main class='text-center' style='font-size:18px;font-weight:bolder;'>" . $dado['titulo'].  "</main>" .


                           "<pre>". $dado['descricao'].  "</pre>" 
                           ."<span class='right'> ".$dado['dataatual'] . "  -   " . $dado['hora']. "</span>";
                        ?>
                        <form>
                            <div class="blocoIcones">
                                <input type="text" name="campo">
                                <button id="iconLike"></button>
                                <button id="iconChamar"></button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
<!--
            <div class="row">
                <div class="col-3">
                    <img src="img/sergio.jpg" class="usuarios">
                </div>
                <div class="col-7">
                    <p class="nomes text-center">Sergio Nascimento </p> <span class="text-center">15/11/2020 23:04</span>
                </div>
                <div class="col-2">
                    <a class="active" href="javascript:void(0)" onclick="openNav()"><i class="fas fa-ellipsis-v"></i></a>

                </div>
            </div>
            <div class="row">
                <div class="col-12 postagem text-left">
                    Olá, meu nome é Sergio e esse post é apenas uma demonstração de como será a postagem dos usuarios

                    <form>
                        <div class="blocoIcones">
                            <input type="text" name="campo">
                            <button id="iconLike"></button>
                            <button id="iconChamar"></button>
                        </div>
                    </form>
                </div>
            </div>

-->
            <div class="row center">
                <div class="col-12">
                    <div class="post text-center">
                        <a href="post.php"><img src="img/post.svg" id="post"></a>
                    </div>
                </div>


            </div>
        </div>

        <!-- Menu Lateral-->
        <div class="sidenav" id="sidenav">
            <div class="padding">
                <div class="row">
                    <div class="col-12 text-center padding">
                        <!-- HREF = MUDE PARA SUA PORTA ,MUDE CASO USE O XAMPP OU ALGO SEMELHANTE-->
                        <a href="pagina.php" onclick="javascript:window.close()"><i class="center fas fa-sign-out-alt">Sair</i> </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 text-center">
                        <img src="img/lixeira.svg" class="icons">
                    </div>
                    <div class="col-7">
                        <p class="text-big text-white">
                            Apagar
                        </p>

                    </div>

                </div>
                <div class="row">
                    <div class="col-5 text-center">
                        <img src="img/denunciar.svg" class="icons">
                    </div>
                    <div class="col-7 text-big text-white  padding">
                        Denunciar
                    </div>

                </div>
            </div>
        </div>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>

        <script>
            function openNav() {
                document.getElementById("sidenav").style.bottom = "-25%";
                document.getElementById("sidenav").style.width = "100%";
                document.getElementById("sidenav").style.height = "300px";
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