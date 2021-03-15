<html>

<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../mobileui/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <style>
        #titleDiscoveryNow {
            font-family: 'Chewy', cursive;
            font-size: 55px;
            line-height: 46px;
            position: absolute;
            top: 320px;
        }
        p{
            position: absolute;
            top: 275px;
            color: blue;
        }
    </style>
    <title>index</title>
</head>

<body>

    <div class="content row-center align-center">

        <img class="login" src="../img/login1.svg">
        <p class="text-white">WELCOME TO</p>
  <h1 id="titleDiscoveryNow" class="text-blue">KodeApp</h1>

        <form>

            <button type="button" class="button btn btn-primary btn-lg btn-block" onclick="Escolha()">Login</button>

            <button type="button" class="button btn btn-dark  btn-lg btn-block" onclick="Escolha1()">Cadastrar</button>
          
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function Escolha() {
            window.location.replace("../login/login.php");
        }

        function Escolha1() {
            window.location.replace("../login/cadastrar.php");
        }
    </script>
</body>

</html>