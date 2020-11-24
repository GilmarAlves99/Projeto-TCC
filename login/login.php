<html>

<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../mobileui/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />

    <title>Login</title>
</head>

<body>

    <div class="content row-center align-center">

        <img class="login" src="../img/login1.svg">
        <!-- <h1>Bem vindo</h1> -->
        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" placeholder="email@example.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="**********">
                </div>
            </div>
            <button type="button" class="btn-primary" onclick="Login()">Login</button>
            <small id="emailHelp" class="form-text text-black">Ecessar sua conta via:</small>
            <button type="button" class="botao btn-primary btn-lg">Facebook</button>
            <button type="button" class="botao btn-secondary btn-lg">Gmail</button>

        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function Login() {
            window.location.href = "../pagina.php";
        }
    </script>
</body>

</html>