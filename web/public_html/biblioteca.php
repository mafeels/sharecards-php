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
                <a href="#">Sair</a>
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
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                 <section>
            <br>
            <br>
            <button class="btn btn-primary btn-lg" type="button" onclick="window.location.href = 'dash.php'">Retornar ao Dashboard</button>

            <br>
            <br>
            <hr>
            <div class="flashcards1">
                <h2 id="dash"><i>Biblioteca - Explore os Flashcards!</i></h2>
                <div class="linha"></div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/Cover.jpg" alt="flashcard de música">
                    </a>
                    <div class="desc">Música</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/mona.jpg" alt="flashcard de Artes">
                    </a>
                    <div class="desc">Artes</div>
                </div>

                <div class="gallery">
                    <a href="dashedi_2.html">
                        <img src="images/com.jpg" alt="flashcard de comunismo">
                    </a>
                    <div class="desc">Comunismo</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/Will Min.png" alt="flashcard de Minimalismo">
                    </a>
                    <div class="desc">Minimalismo</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/sand.jpg" alt="flashcard de Sandrini">
                    </a>
                    <div class="desc">Sandrini</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/html.png" alt="flashcard de HTML">
                    </a>
                    <div class="desc">HTML</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/carro.jpg" alt="flashcard de Carros Esportivos">
                    </a>
                    <div class="desc">Carros Esportivos</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/Banhe.jpg" alt="flashcard de Banheiras">
                    </a>
                    <div class="desc">Banheiras</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/guerra.jpg" alt="flashcard de Guerra na Síria">
                    </a>
                    <div class="desc">Guerra na Síria</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>

                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
                <div class="gallery">
                    <a href="dashFlash.html">
                        <img src="images/ampulheta.png" alt="flashcard de ...">
                    </a>
                    <div class="desc">Carregando...</div>
                </div>
            </div>
        </section>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
                                                                  
<!-- Scripts -->  
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