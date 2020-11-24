<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>