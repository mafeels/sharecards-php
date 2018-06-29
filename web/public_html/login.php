<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="js/flashnotes.js"></script>
    </head>
    <body class="login-bg siteBackground">
        <div class="navbar navbar-fixed-top header">
            <header class="container">
                <div class="row">
                <a class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 buttonheader" href="index.html">ShareCards</a>
                </div>
            </header>
        </div>
        <div class="page-content container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 login">
                    <div class="login-wrapper">
                        <div class="box">
                            <form method="post" action="dash.php">
                            <div class="forms" >
                                <div class="brandImg">
                                    <img src="images/logomin.png" alt="LogoFlashNotes" class="brandImgForm">
                                </div>
                                <hr>
                                <input class="form-control" type="text" placeholder="e-mail" id="email" name="email">
                                <br>
                                <input class="form-control" type="password" placeholder="senha" id="senha" name="senha">
                                <br>
                                <p id="valid" class="message1"></p>

                                <button type="submit" value="Entrar" class="inmain" name="action" ></button>

                                <br>
                                <div>
                                    <a class="linkable" href="esqueciSenha1.html">Esqueceu a senha?</a>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
    <!--onclick="blankPassword(document.getElementById('email').value, document.getElementById('senha').value)-->
</html>
