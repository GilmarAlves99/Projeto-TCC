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
    <link rel="stylesheet" type="text/css" href="mobileui/style.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/pagina.css" rel="stylesheet"/>
    <title>Pagina Inicial teste</title>
</head>

<body>

<div id="menu" class="row text-center ">
        <div class="col-4">
            <a href="#"><img src="img/home.svg" class="icons"></a>
        </div>
        <div class="col-4 ">
            <a href="chat.php"><img src="img/chat.svg" class="icons"></a>
        </div>

        <div class="col-4 ">
            <a href="profissionais.php"><img src="img/quemsomos.svg" class="icons"></a>
        </div>
    </div>



    <div class="conteudo">
        <!--Primeiro usu-->
        <div class="row">
            <div class="col-3">
                <img src="https://scontent.fsod5-1.fna.fbcdn.net/v/t1.0-0/p206x206/123345346_3767431696641896_4657981961190462491_o.jpg?_nc_cat=109&ccb=2&_nc_sid=da31f3&_nc_ohc=15QLep-a96UAX-r-BHN&_nc_ht=scontent.fsod5-1.fna&tp=6&oh=b0b06bdf7a8c4547b0e760cafe9d9e14&oe=5FDBDBF2"
                    class="usuarios">
            </div>
            <div class="col-6">
                <p class="nomes text-center">Gilmar Zezilia Alves </p> <span class="text-center">15/11/2020 23:04</span>
            </div>
            <div class="col-3">

                <img src="img/teste1.png" class="botaoteste">
            </div>
        </div>
        <div class="row">
            <div class="col-12 postagem text-left">
                Olá, meu nome é Gilmar e esse post é apenas uma demonstração de como será a postagem dos usuarios
                <form>
                    <div class="blocoIcones">
                    <input type="text" name="campo">
                    <button id="iconLike"></button>
                    <button id="iconChamar"></button>
                  </div>
                </form>



                <!-- placeholder="Comentar...">
           --></div>
        </div>

        <!--segundo usu-->

        <div class="row">
            <div class="col-3">
                <img src="https://scontent.fsod5-1.fna.fbcdn.net/v/t1.0-9/120743582_1472483666269455_8069773177448365172_o.jpg?_nc_cat=106&ccb=2&_nc_sid=09cbfe&_nc_ohc=y31qpgEL-T8AX8-cy0S&_nc_ht=scontent.fsod5-1.fna&oh=a07b55b9eb19b8c9caec113d5a50df7e&oe=5FDB2221" class="usuarios">
            </div>
            <div class="col-6">
                <p class="nomes text-center">Sergio Nascimento </p> <span class="text-center">15/11/2020 23:04</span>
            </div>
            <div class="col-3">

                <img src="img/teste1.png" class="botaoteste">
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


        <div class="row">
            <div class="col-12">
                <div class="post text-center">
                    <a href="post.php"><img src="img/post.svg" id="post"></a>
                </div>
            </div>


        </div>
    </div>
    
<script src="js/bootstrap.min.js" ></script>
</body>

</html>