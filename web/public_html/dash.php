
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    </head>
    <body>
        <!--- Cabeçalho/HEADER --->
        <div class="header">
            <header class="container">
                <div class="row">
                <a class="col-xs-12 col-sm-6 col-md-3 buttonheader" href="index.html">ShareCards</a>
                <a class="col-xs-12  col-sm-6 col-md-3 col-md-offset-6 buttonHeader" onclick="sair()"><span class="glyphicon glyphicon-log-in"></span>  Sair</a> 
                </div>
            </header>
        </div>
        <!--- #header --->
        <?php
            //receber os dados do formulario
            $email= $_POST["email"];
            $senha = $_POST["senha"];
            //criar conexão com o banco
            echo "$email $senha";
            $servidor = "localhost";
            $usuario = "root";
            $senha = "vertrigo";
            $banco = "flashnotes";

            $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
            if (!$conexao) {
                die ("falha na conexão".mysqli_connection_error());
            }

            $query = "SELECT * FROM usuario WHERE email='".$email."' AND senha='".$senha."' ";

            $resultado = mysqli_query($conexao,$query);
        	$num_resultados = mysqli_num_rows($resultado);
	echo "Numero de resultados encontrador: $num_resultados";
            if($resultado){
                echo ' 
        <div class="container" id="wrapper">
            <div id="sidebar-wrapper">
            <div class="sidebar-nav">
                    <img onclick="window.location.href = \'configPerfil.html\'" src="images/edi_perfil.PNG" class="img-responsive img-circle" alt="Imagem do usuário" id="img-perfil">
                    <h5>Edilsinho Ferreira</h5>
                    <a class="btn btn-primary" href="configPerfil.html">Configurações da Conta</a>
            </div>
                
                
        </div>

        <div id="page-content-wrapper">
                <div class="container-fluid">
                    <h1>Simple Sidebar</h1>
                    <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                    <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                </div>
            </div>

            
        </div>';   
        }
        ?>
        <script src="js/jquery-3.2.1.js"></script>

        <script>
            $(document).ready(function () {
                $("#TutTog").click(function () {
                    $("#TutContent").fadeToggle();
        </script>
        <script src="js/flashnotes.js"></script>

        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script> 
    </body>
</html>
