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
    <link rel="stylesheet" type="text/css" href="mobileui/style.css" />
    <link rel="stylesheet" type="text/css" href="css/conversa.css" />
    <title>Conversas</title>
</head>

<body>
    <div class="content">
        <div id="menu" class="row text-center ">
            <div class="col-4">
                <a href="pagina.php"><img src="img/home.svg" class="icons"></a>
            </div>
            <div class="col-6 ">
                <a class="conversas" href="chat.php">Conversas</a>
            </div>
        </div>




        <div class="chat">
            <!-- Primeira Coversa-->
            <div class="modelagem balao2">
                <div class="row ">

                    <div class="col-4">
                        <img src="img/usuario1.svg" class="icons">
                    </div>
                    <div class="col-8 padding text-left">
                        <p> Oi Gilmar, Tudo bem? </p>
                    </div>

                </div>
            </div>


            <div class="balao respostaMinha">
                <div class="row">

                    <div class="col-5">
                        <img src="img/usuario2.svg" class="icons">
                    </div>
                    <div class="col-7 padding text-left">
                        <p> Oi Sergio, tudo sim e você parça ? </p>
                    </div>

                </div>

            </div>


            <div class="modelagem balao2">
                <div class="row ">

                    <div class="col-4">
                        <img src="img/usuario1.svg" class="icons">
                    </div>
                    <div class="col-8 padding">
                        <p> Bem mano</p>
                    </div>

                </div>

            </div>
            <div class="formenviar">
                <form>
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control">
                        </div>
                        <div class="col-4">
                            <button type="text" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <script src="js/bootstrap.min.js" ></script>

    <script>
        function openNav() {
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