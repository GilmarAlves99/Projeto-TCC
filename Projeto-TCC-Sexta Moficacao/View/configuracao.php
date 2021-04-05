<?php
include_once 'verifica.php';
if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
    require '../Controller/UsuarioController.php';

    $usuario = UsuarioController::logged($_SESSION['idUser']);


?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@100&display=swap" rel="stylesheet">

        <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/configuracao.css" />

        <title>Configuração do usuario</title>
    </head>

    <body>

        <div id="menu" class="row text-center ">
            <div class="col">
                <a href="pagina.php"><img src="../img/home.svg" class="icons"></a>
            </div>
           <!--   <div class="col-6">
              <label for="input-dark-mode">
                    <a class="button">Modo dark</a>
                </label>
                <input type="checkbox" id="input-dark-mode">
            </div>
-->
        </div>
        <div class="container">
            <div class="meuPerfil  text-center ">
                <div class="row">
                    <div class="col-12">
                        <h4 class="p-3">MEU PERFIL</h4>

                        <img src="../imagens/users/<?php echo $usuario['imagem']; ?>" class="iconsEu">

                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <p style="margin: 0;color:#005bffb0;font-size:22px;font-weight:bolder;">Olá</p>
                        <p style="margin: 0;color:#0a005b;font-size:17px;font-weight:bolder;"> <?php echo $usuario['nome']. "<br>". $usuario['id_usuario']; ?>!</p>

                    </div>
                </div>
                <div class="p-4">
                    <p style="margin: 0;color:#005bffb0;font-size:22px;font-weight:bolder;"> E-mail</p>
                    <p style="margin: 0;color:#0a005b;font-size:17px;font-weight:bolder;"> <?php echo  $usuario['email']; ?> </p>
                </div>
                <div class="sair p-4">
                    <a href="logout.php" style="font-size:17px;"> <img src="../img/sair4.png"></a>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
      
    </body>

    </html>
<?php
} else {
    header('Location: index.php');
}
?>