<html>

<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../mobileui/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/cadastrar.css" />

    <title>Login</title>
</head>

<body>
    <div class="content row-center align-center">
        <img class="login" src="../img/login1.svg">
        <!-- <h1>Bem vindo</h1> -->
        <form>

            <div class="form-group">
                <label class="left" for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group">
                <label class="left" for="inputPassword4">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="left" for="inputCity">Nome</label>
                    <input type="text" class="form-control" id="inputNickName">
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label style="font-size: 15pt;" class="alert-link">Selecione sua foto</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
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