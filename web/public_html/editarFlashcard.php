<?php
    session_start();

    if(empty($_SESSION['codigo_usuario'])){

        $_SESSION['loginErro'] = "Voce não está logado";
        header("location: login.php");

    }
?>

<!DOCTYPE html>
<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="text/css">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="estudar.css" rel="stylesheet" type="text/css"> 
        
    <title>Estudar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    

    </head>
    <body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="">
            <a class="navbar-brand" href="index.html">
                <img src="images/logomin.png" width="170" height="50" alt="LOGO">
            </a>
        <ul class="nav navbar-right top-nav">          
            <li>
                 <a href="login.php">Sair</a>
            </li>
            <!--- Botão collapse que aparece em telas pequenas -->
            <li>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </li>
        </ul>
        </div>

        <!--- Top Menu Items -->

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <img onclick="window.location.href = 'configPerfil.html'" src="images/edi_perfil.PNG" class="img-responsive img-circle" alt="Imagem do usuário">
                </li>
                <li>
                    
                </li>
                <li>
                    <div class="col-md-12">
                        <h5>Edilsinho Ferreira
                        <a class="btn btn-default" href="configPerfil.html">
                        <span class="glyphicon glyphicon-wrench"></span>
                        </a>
                        </h5>
                    </div>
                </li>
                <li>
                    <div class="input-group form">
                            <input type="text" class="form-control" placeholder="Pesquise...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Categorias <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid well">
            <!-- Page Heading -->
            <div class="row" id="main" >
                 <h3> Escolha um flashcard: </h3>
                 <div>
                    <?php  
                        include_once("connection_factory.php");

                        $query = "SELECT * from flashcard WHERE codigo_usuario='".$_SESSION["codigo_usuario"]."' ";
                        $result = mysqli_query($conexao,$query);
                        $num_results = mysqli_num_rows($result);
                        
                        for ($i=0; $i <$num_results; $i++)
                        {
                             $row = mysqli_fetch_array($result);

                             echo "<div class='gallery'>";
                                 echo "<a href='editFlash.php?id=".$row[0]."'>";
                                 echo "<img src='images/mona.jpg' alt='flashcard de Artes'>";
                                 echo "</a>";
                                 echo "<div class='desc'>Nome: ";
                                 echo stripslashes($row[2]);
                                 echo "</div>";
                             echo "</div>";
                        }

                    ?>
                 </div>


            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->


                                                                  
<!-- Scripts -->  
    <p style="text-align: center;"> ShareCards 2018. All rights reserved. Made by William and Matheus.</p>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="estudar.js"></script>
                <script>
            $(document).ready(function () {
                $("#TutTog").click(function () {
                    $("#TutContent").fadeToggle();
                });
            });
        </script>
    </body>
</html>