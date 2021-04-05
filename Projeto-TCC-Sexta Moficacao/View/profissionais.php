<?php
include_once 'verifica.php';
if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {

    require_once '../Controller/UsuarioController.php';
    $profissionais = UsuarioController::listarProfissionais();
    /*
echo "<pre>";
print_r($profissionais);
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
        <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@100&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/ajudaprof.css" />
        <title>Pagina Inicial teste</title>
    </head>

    <body>

        <div id="menu" class="row text-center ">
            <div class="col-4">
                <a href="pagina.php"><img src="../img/home.svg" class="icons"></a>
            </div>

            <div class="col-4">
                <a href="#"><img src="../img/quemsomos.svg" class="icons"></a>
            </div>
            <div class="col-4">
                <a href="configuracao.php"><img src="../img/euconfig.svg" class="icons"></a>
            </div>
        </div>
        <div class="container mt-2">

            <h5 class="text-center">
                Lista de Profissionais que podem te ajudar !
            </h5>


            <?php
            foreach ($profissionais as $dados) {


            ?>
                <div class="conteudo text-center">
                    <div class="row">
                        <div class="col mt-1 ">
                           
                                <img src="../imagens/users/<?=$dados['imagem']; ?>" alt="..." class="prof rounded-0">

                         
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col">
                            <img src="../img/email.png" class="iconWhats">
                                <?= $dados['email']; ?>
                         
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col">
                          
                                <img src="../img/whatsapp.png" class="iconWhats"> <?= $dados['celular']; ?>
                           
                        </div>

                    </div>

                    <div class="row ">
                        <div class="col-6">
                             <img src="../img/tagname.png" class="iconWhats">
                                <?= $dados['nome']; ?>
                            
                        </div>
                        <div class="col-6">
                        <img src="../img/nas.png" class="iconWhats">
                            <?= 
                            
                            $dados['dataNascimento'] ?>

                        </div>

                    </div>
                </div>

            <?php
            }
            ?>

        </div>






        <script src="../js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location: index.php');
}
?>