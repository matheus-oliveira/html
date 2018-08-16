<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Faço & Refaço</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sortcut icon" href="images/pink-306516_960_720.jpg" width=""  type="image/jpg" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href=".css/estilos.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>

            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: #823750;
                color: white;
                padding: 10px;
            }

            .carousel-inner img{
                width: 100%; /* Set width to 100% */

            }
            {
                width: 100%; /* Set width to 100% */
                background-color: red;

            }

            /* Hide the carousel text when the screen is less than 600 pixels wide */
            /*@media (max-width: 600px) {
            .carousel-caption {
            display: none;
            }
            }*/

            .dropbtn {
                background-color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: white;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: white}

            .dropdown:hover .dropdown-content {
                display: block;
                color: ;
            }

            .dropdown:hover .dropbtn {
                color: #823750;
                background-color: #fff;
            }
            .btn ,.btn-default{
                margin: 10px;
            }

            #alinharButton{

                margin:auto;
                width:100%;
            }
            label{
                margin-top: 5px;

            }

            #login1{
                background: white/;
                color: black;
                font-size: 11pt;
            }
            /*#negrito {
              color: #9a1ce8;
         font-weight: bold;
            }*/
            .view .estilo_imagem:hover{
                background: rgba(130, 55, 80, 0.68);
                opacity: 0;
                transition: all 0.5s;
            }
            #estilo_fonte{
                font-size:15px;
                color:#823750;
                font-weight: bold;
            }
            #estilo_fonte2{
                font-size:15px;
                color:#823750;
                font-weight: bold;
            }
            #estilo_fonte3{
                font-size:13px;
                color:#823750;
                font-weight: bold;
            }

        </style>
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
                                    <img class="img-responsive" height="" src="./images/logo2.png" alt="">
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
                <div class="container  col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3">
                        <!--responsavel pelo alinhamento ao centro do
                          form definido para ocupar 3 posicoes na grid do lado direito--->
                    </div>
                    <form class="col-md-6" action="../controller/salvarCadastroUsuarioController.php" method="post">


                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label for="cpf">Cpf</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group" >
                            <label for="sexo">Sexo</label>
                            <div class='radio-inline'>
                                <label>
                                    <input type='radio' name='sexo' value='M'>
                                    Masculino
                                </label>
                            </div>
                            <div class='radio-inline'>
                                <label>
                                    <input type='radio' name='sexo' value='F'>
                                    Feminino
                                </label>
                            </div>

                        </div>
                        <div class="form-group" >
                            <label for="dataNasc">Data de nascimento</label>
                            <input type="date" class="form-control" name="dataNasc" id="dataNasc">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="row ">

                            <div class="col-xs-10" >
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite seu endereço completo">
                                <!-- <p class="help-block">Help text here.</p>-->
                            </div>
                            <div class="col-xs-2" >
                                <label for="casa">Casa</label>
                                <input type="casa" class="form-control" name="casa" id="casa" placeholder="Nº">
                            </div>
                            <!-- <p class="help-block">Help text here.</p>-->

                            <div id="top10px" class="form-group col-xs-9">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Digite complemento se necessário">
                                <!-- <p class="help-block">Help text here.</p>-->
                            </div>

                            <div id="top10px" class="form-group col-xs-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite o CEP">
                                <!-- <p class="help-block">Help text here.</p>-->
                            </div>
                        </div><!-- fim row -->

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Digite seu telefone">
                        </div>


                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                            <!-- <p class="help-block">Help text here.</p>-->

                        </div>
                        <div class="form-group">
                            <label for="confirmeEmail">Comfirme seu email</label>
                            <input type="email" class="form-control" name="confirmeEmail" id="confirmeEmail" placeholder="Confirme seu email">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>

                        <div class="form-group">
                            <label for="confirmeSenha" >Comfirme sua senha</label>
                            <input type="password" class="form-control" name="confirmeSenha" id="confirmeSenha" placeholder="Confirme sua senha">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <button type='submit' class='btn btn-primary'>Cadastrar</button>


                    </form>
                    <div class="col-md-3">
                        <!--responsavel pelo alinhamento ao centro do
                          form definido para ocupar 3 posicoes na grid do lado direito--->
                    </div>







                </div><!-- fim div container-->

                </form>


                <!-- mensagem de cadastrado com sucesso -->



                <div>
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
            </div>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <p>Cadastrado com sucesso!!!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                        </div>
                    </div>

                </div>
            </div>

    </body>
</html>
