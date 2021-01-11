<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./mobileui/style.css">
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
                        <p> Oi Gilsmsssssar, Tudo bem? </p>

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






    <!-- Menu Lateral-->
    <div class="sidenav" id="sidenav">
        <div class="padding">
            <div class="row">
                <div class="col-12 text-center padding">
                    <!-- HREF = MUDE PARA SUA PORTA ,MUDE CASO USE O XAMPP OU ALGO SEMELHANTE-->
                    <a href="chat.php" onclick="javascript:window.close()"><i class="center fas fa-sign-out-alt">Sair</i> </a>
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
            document.getElementById("sidenav").style.bottom = "-15%";
            document.getElementById("sidenav").style.width = "100%";
            document.getElementById("sidenav").style.height = "300px";
        }

        function closeNav() {
            document.getElementById("sidenav").style.width = "0";
            document.getElementById("sidenav").style.height = "0";
        }
    </script>
    

</body>