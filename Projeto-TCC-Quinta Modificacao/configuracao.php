<?php
include_once 'verifica.php';
if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {



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

    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/configuracao.css" />

    <title>Configuração do usuario</title>
</head>

<body>

    <div id="menu" class="row text-center ">
        <div class="col-4">
            <a href="pagina.php"><img src="img/home.svg" class="icons"></a>
        </div>
        <div class="col-8 ">
            <h4 style="position:relative;left: -15px;top:10px;">Configuração</h4>
        </div>
    </div>

    <div class="meuPerfil  text-center ">
        <div class="row">
            <div class="col-12">
                <img src="img/eu.jpg" class="iconsEu">
                <img src="img/baixar2.svg" class="iconsEditar">
            </div>
        </div>
        <div class="row padding">
            <div class="col-12 text-center">
                <p class="text-big"  style="font-size:25px;color:#005bffb0;font-weight:bolder;">Nome: <?php echo $nomeUser; ?>!</p>

            </div>
        </div>
        <div class="meusDados">
            <div class="row">
                <div class="col-12">
                 <b style="font-size:17px;color:#005bffb0;font-weight:bolder;">Email : <?php echo $emailUser; ?> </b>
              
                 <img src="img/baixar.svg" class="iconEditarEmail">
                </div>
             
            </div>
            <a href="logout.php" style="font-size:17px;"> Deseja sair ?</a>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</body>
</html>
<?php
}else{
header('Location: index.php');

}
?>