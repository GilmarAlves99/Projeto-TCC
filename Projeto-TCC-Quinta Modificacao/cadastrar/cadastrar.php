<html>

<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, 
minimum-scale=1, width=device-width" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="../css/cadastrar.css" />

    <title>Cadastrar</title>
</head>

<body>
    <div class="container row-center align-center">
       
        <!-- <h1>Bem vindo</h1> -->
        <form action="cadastro.php" method="POST" enctype="multipart/form-data">

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
            </div><div class="form-group">
                <label class="left">Celular</label>
                <input type="tel" class="form-control" name="celular" id="cel" placeholder="(xx)xx xxxxxxxxx">
            </div>
            <div class="form-group">
                <label class="left"> profissão</label>
                <input type="text" class="form-control" name="profissao"  placeholder="Exemplo Psicologo">
            </div>
           
            <div class="form-group">
                <label class="left">Imagem:</label>
                <input class="form" name="image" type="file" />

            </div>


            <!--
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label text-bold" for="inlineRadio1">Como Usuário</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label text-bold" for="inlineRadio2">Como Profissional</label>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label style="font-size: 15pt;" class="alert-link">Selecione sua foto</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            -->
            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>