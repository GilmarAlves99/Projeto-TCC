
<?php
session_start();
if (isset($_SESSION['login'])) {
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
    <link rel="stylesheet" type="text/css" href="mobileui/style.css" />
    <link rel="stylesheet" type="text/css" href="css/ajudaprof.css" />
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
        <div class="row">
            <div class="col-12">
                <h2 class="text-center"> Deseja conversar com um Profissional ? </h2>
            </div>
        </div>

       <div class="row">
            <div class="col-12 postagem text-center">
                <img src="img/prof1.jpg" class="ajudaprof">
                <h3>Roberta Santos</h3>
                <p class="descricao">
                    CEO e Fundadora da Vittude. É apaixonada por psicologia e comportamento humano, sendo grande estudiosa de temas como Psicologia Positiva e os impactos da felicidade na saúde física e mental.
                </p>
                <img src="img/login1.svg" class="icons">
            </div>
        </div>


        <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
} else {
    //Direciona para o Login
    echo "<script>location.href='login/login.php'</script>";
}
?>