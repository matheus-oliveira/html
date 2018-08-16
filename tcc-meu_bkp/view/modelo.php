<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Faço & Refaço</title>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sortcut icon" href="images/pink-306516_960_720.jpg" width=""  type="image/jpg" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.min.css" rel="stylesheet"/>
        <link href=".css/estilos.css" rel="stylesheet" />
        <script src=".js/jquery-3.2.1.min.js"></script>
        <script src=".js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">

            <div id="blocoLogin" class="container-fluid">
                <nav class="navbar navbar" id="estilo_menu">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class=" col-md-12 container-fluid collapse navbar-collapse " id="myNavbar">
                            <div class="col-md-2 nav navbar-nav navbar-left">
                                <a href="#">
                                    <img class="img-responsive" height="" src="../images/logo2.png" alt="">
                                    </div>
                                    <div class="dropdown">
                                        <a href="portifolio.php">
                                            <!-- <button class="dropbtn" id="estilo_fonte" >PORTIFÓLIO</button> -->
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <a href="quem_somos.php">
                                            <!-- <button class="dropbtn" id="estilo_fonte" >QUEM SOMOS</button> -->
                                        </a>
                                    </div>
                                    <div class="nav navbar-nav navbar-right">
                                        <div class="dropdown">
                                            <button class="dropbtn" id="estilo_fonte" ><span class="glyphicon glyphicon-comment"></span> ATENDIMENTO</button>
                                            <div class="dropdown-content">
                                                <a class="fa fa-whatsapp" id="estilo_fonte3"> 61 98888-8888</a>
                                                <a class="fa fa-whatsapp" id="estilo_fonte3"> 61 3344-5566</a>
                                                <a href="#"id="estilo_fonte3">Seg. Sex 08h 16h</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="dropbtn" id="estilo_fonte" ><span class="glyphicon glyphicon-user"></span> LOGIN/CADASTRE-SE</button>
                                            <div class="dropdown-content">
                                                <div class="container col-md-12">
                                                    <form action="/action_page.php">
                                                        <div class="form-group">
                                                            <label for="email" id="estilo_fonte" ><span class="glyphicon glyphicon-user"></span>&nbsp;Email:</label>
                                                            <input type="email" class="form-control" id="email" placeholder="Insira seu email" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd" id="estilo_fonte" ><span class="glyphicon glyphicon-lock"></span>&nbsp;Senha:</label>
                                                            <input type="password" class="form-control" id="pwd" placeholder="Insira sua senha" name="pwd">
                                                        </div>
                                                        <button type="button" class="btn btn-link" id="estilo_fonte" >Esqueci minha senha</button>


                                                        <button type="button" class="btn btn-primary btn-block" id="alinharButton" ><span class="glyphicon glyphicon-pencil"></span>Login</button>


                                                    </form>

                                                    <a href="./view/formCadastroUsuario.php">
                                                        <button type="button" class="btn btn-primary btn-block" id="alinharButton"><span class="glyphicon glyphicon-pencil"></span>Cadastre-se</button>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </nav>



                <?php
                if (isset($_GET["conf"]) && $_GET["conf"] == TRUE) {
                    echo "<script>";
                    echo "    $(document).ready(function () {";
                    echo "     $('#myModal').modal();";
                    echo "    });";
                    echo "</script>";
                }
                ?>


            </div>
            <!-- fim container -->

        </div>
        <!-- fim row -->


        <h1 class="">Insira suas informações</h1>
        <footer class="container-fluid text-center">
            <a href="https://www.facebook.com/">
                <i class="fa fa-facebook-square" style="font-size:30px;color: white"> </i>
            </a>
            <a href="https://www.instagram.com/?hl=pt-br">
                <i class="fa fa-instagram" style="font-size:30px;color: white"></i>
            </a>
            <div class="container-fluid text-left">
                <img class="img-responsive" height="" src="../images/logo4.png" alt="">
            </div>

            <p> FAÇO E REFAÇO  &copy;  -2017 </p>
            Faço & Refaço LTDA | CNPJ: 00.000.000/0000-00 | Deck Brasil Sul Shopping - SHIS Qi 11 BL O SALA 132 | Lago Sul | Brasília - DF
        </footer>
    </body>
</html>
