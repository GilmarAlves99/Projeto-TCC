<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/chat.css">


</head>

<body>


    <div id="menu" class="row text-center ">
        <div class="col-3">
            <a href="pagina.php"><img src="img/home.svg" class="icons"></a>
        </div>
        <div class="col-3">
            <a href="#"><img src="img/chat.svg" class="icons"></a>
        </div>

        <div class="col-3">
            <a href="profissionais.php"><img src="img/quemsomos.svg" class="icons"></a>
        </div>
        <div class="col-3">
            <a href="configuracao.php"><img src="img/euconfig.svg" class="icons"></a>
        </div>
    </div>





    <div class="chat">

        <div class="modelagem">
            <div class="row ">

                <div class="col-3">
                    <img src="img/usuario1.svg" class="icon">
                </div>
                <div class="col-7 padding">
                    <a href="conversa.php">
                        <p> Oi Gilmar, Tudo bem? </p>

                    </a>
                </div>
                <div class="col-2 padding">
                    <a class="active" href="javascript:void(0)" onclick="openNav()"> <i class="fas fa-ellipsis-v"></i></a>
                </div>
            </div>
        </div>

        <div class="modelagem">
            <div class="row ">

                <div class="col-3  ">
                    <img src="img/usuario2.svg" class="icon ">
                </div>
                <div class="col-7 padding">
                    <p> Olá Luiz, Sou o carlos, vi seu post e ...</p>
                </div>
                <div class="col-2 padding">
                    <a class="active" href="javascript:void(0)" onclick="openNav()"><i class="fas fa-ellipsis-v"></i></a>
                </div>
            </div>
        </div>


        <div class="modelagem">
            <div class="row ">

                <div class="col-3">
                    <img src="img/usuario3.svg" class="icon">
                </div>
                <div class="col-7 padding">

                    <p> Oi Sergio, Meu nome é Irineia mas pode me chamar de neia se quiser</p>

                </div>
                <div class="col-2 padding">
                    <a class="active" href="javascript:void(0)" onclick="openNav()"><i class="fas fa-ellipsis-v"></i></a>
                </div>
            </div>

        </div>

    </div>





    <div class="sidenav" id="sidenav">

        <div class="row">
            <div class="col-4">
                <img src="img/lixeira.svg" class="icons">
            </div>
            <div class="col-8 padding">
                <p class="text-big text-red ">Apagar Chat
                    <a href="chat.html" onclick="javascript:window.close()"><i class="text-small center fas fa-sign-out-alt">Sair</i> </a></p>

            </div>

        </div>
        <div class="row">
            <div class="col-4">
                <img src="img/denunciar.svg" class="icons">
            </div>
            <div class="col-8 text-big text-red padding">
                Denunciar
            </div>
        </div>


    </div>




    <script src="js/jquery.min.js"></script>
    <script>
        function openNav() {
            document.getElementById("sidenav").style.width = "300px";
        }

        function closeNav() {
            document.getElementById("sidenav").style.width = "0";
        }
    </script>

</body>