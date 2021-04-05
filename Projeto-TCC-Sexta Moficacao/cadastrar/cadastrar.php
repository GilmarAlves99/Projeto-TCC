<html>

<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="../css/cadastrar.css" />

    <title>Cadastrar</title>
</head>

<body>
    <div class="container row-center ">

        <!-- <h1>Bem vindo</h1> -->
        <form class="formularioCadastro" action="cadastro.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label class="left" for="inputEmail4">Nome</label>
                <input type="text" class="form-control" name="nome" id="usuario" placeholder="Nick">
            </div>
            <div class="form-group">
                <label class="left" for="inputPassword4">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="**********">
            </div>
            <div class="form-group">
                <label class="left" for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="teste@dominio.com">
            </div>

            <div class="form-group">
                <label class="left">Data de nascimento</label>
                <input type="date" class="form-control" name="dataNascimento" id="idade" placeholder="xx/xx/xxxx">
            </div>
            <div class="form-group">
                <label class="left">Celular</label>
                <input type="tel" class="form-control" name="celular" id="cel" placeholder="+55(xx) xxxxxxxxx">
            </div>
            <div class="form-group">
            <label class="left">Tipo de Usuario: </label><br>
                <select name="tipousuario" uniqid>
                    <option>Comum</option>
                    <option>Profissional</option>
                </select>

            </div>

            <div class="form-group">
                <label class="left">Imagem:</label>
                <input class="form" name="image" type="file" value="Browse" />

            </div>



            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>