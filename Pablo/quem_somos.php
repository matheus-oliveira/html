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
        <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
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
            #obrigatorio{
                color: #f0682e;
            }
        </style>
    </head>
    <body>
        <div class="row">

            <div id="blocoLogin" class="container-fluid">
                <nav class="navbar navbar " id="estilo_menu">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class=" col-md-12 container-fluid collapse navbar-collapse " id="myNavbar">
                            <div class="col-md-2 nav navbar-nav navbar-left">
                                <a href="index.php">
                                    <img class="img-responsive" height="" src="./images/logo2.png" alt="">
                                    </div>
                                    <div class="dropdown">
                                        <a href="portifolio.php">
                                            <button class="dropbtn" id="estilo_fonte" >PORTIFÓLIO</button>
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <a href="quem_somos.php">
                                            <button class="dropbtn" id="estilo_fonte" >QUEM SOMOS</button>
                                        </a>
                                    </div>
                                    <div class="nav navbar-nav navbar-right">
                                        <div class="dropdown">
                                            <button class="dropbtn" id="estilo_fonte" ><span class="glyphicon glyphicon-comment"></span> ATENDIMENTO</button>
                                            <div class="dropdown-content">
                                                <a class="fa fa-whatsapp" id="estilo_fonte2"> 61 98888-8888</a>
                                                <a class="fa fa-whatsapp" id="estilo_fonte2"> 61 3344-5566</a>
                                                <a href="#"id="estilo_fonte3">Seg. Sex 08h 16h</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="dropbtn" id="estilo_fonte" ><span class="glyphicon glyphicon-user"></span> LOGIN/CADASTRE-SE</button>
                                            <div class="dropdown-content">
                                                <div class="container col-md-12">
                                                    <form action="/action_page.php">
                                                        <div class="form-group">
                                                            <label for="email" id="estilo_fonte" ><span class="glyphicon glyphicon-user"></span>&nbsp;Email: <span id="obrigatorio">*</span></label>
                                                            <input type="email" class="form-control" id="email" placeholder="Insira seu email" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd" id="estilo_fonte" ><span class="glyphicon glyphicon-lock"></span>&nbsp;Senha: <span id="obrigatorio">*</span></label>
                                                            <input type="password" class="form-control" id="pwd" placeholder="Insira sua senha" name="pwd">
                                                        </div>
                                                        <button type="button" class="btn btn-link" id="estilo_fonte" >Esqueci minha senha</button>


                                                        <button type="button" class="btn btn-primary btn-block" id="alinharButton" ><span class="glyphicon glyphicon-pencil"></span>Login</button>


                                                    </form>

                                                    <a href="./view/formCadastroCliente.php">
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
                    <form id="meu_form" class="col-md-6" action="recebeForm.php"   method="post">


                        <div class="form-group">
                            <label for="nome">Nome: <span id="obrigatorio">*</span></label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label for="cpf">Cpf <span id="obrigatorio">*</span></label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group" >
                            <label for="sexo">Sexo <span id="obrigatorio">*</span></label>
                            <div class='radio-inline'>
                                <label>
                                    <input type='radio' name='sexo' value='M'>
                                    Masculino
                                    <span id="obrigatorio">*</span></label>
                            </div>
                            <div class='radio-inline'>
                                <label>
                                    <input type='radio' name='sexo' value='F'>
                                    Feminino
                                    <span id="obrigatorio">*</span></label>
                            </div>

                        </div>
                        <div class="form-group" >
                            <label for="dataNasc">Data de nascimento <span id="obrigatorio">*</span></label>
                            <input type="date" class="form-control" name="dataNasc" id="dataNasc">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="row ">

                            <div class="col-xs-10" >
                                <label for="endereco">Endereço <span id="obrigatorio">*</span></label>
                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite seu endereço completo">
                                <!-- <p class="help-block">Help text here.</p>-->
                            </div>
                            <div class="col-xs-2" >
                                <label for="casa">Casa <span id="obrigatorio">*</span></label>
                                <input type="casa" class="form-control" name="casa" id="casa" placeholder="Nº">
                            </div>
                            <!-- <p class="help-block">Help text here.</p>-->

                            <div id="top10px" class="form-group col-xs-9">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Digite complemento se necessário">
                                <!-- <p class="help-block">Help text here.</p>-->
                            </div>

                            <div id="top10px" class="form-group col-xs-3">
                                <label for="cep">CEP <span id="obrigatorio">*</span></label>
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite o CEP">
                                <!-- <p class="help-block">Help text here.</p>-->
                            </div>
                        </div><!-- fim row -->

                        <div class="form-group">
                            <label for="telefone">Telefone <span id="obrigatorio">*</span></label>
                            <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Digite seu telefone">
                        </div>

                        <div class="form-group">
                            <label for="dataAdmicao">Data de Admição <span id="obrigatorio">*</span></label>
                            <input type="date" class="form-control" name="dataAdmicao" id="dataAdmicao" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="salario">Salário <span id="obrigatorio">*</span></label>
                            <input type="float" class="form-control" name="salario" id="salario" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="cargo">Cargo <span id="obrigatorio">*</span></label>
                            <input type="text" class="form-control" name="cargo" id="cargo" placeholder="digite qual o cargo do funcionário">
                        </div>

                        <div class="form-group">
                            <label for="funcao">Função <span id="obrigatorio">*</span></label>
                            <input type="text" class="form-control" name="funcao" id="funcao" placeholder="digite qual a função do funcionário">
                        </div>

                        <div class="form-group">
                            <label for="cargaHoraria">Carga Horária <span id="obrigatorio">*</span></label>
                            <input type="int" class="form-control" name="cargaHoraria" id="cargaHoraria" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="horaEntrada">Horário de entrada <span id="obrigatorio">*</span></label>
                            <input type="datetime-local" class="form-control" name="horaEntrada" id="horaEntrada" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="horaSaida">Horário de Saída <span id="obrigatorio">*</span></label>
                            <input type="datetime-local" class="form-control" name="horaSaida" id="horaSaida" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span id="obrigatorio">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                            <!-- <p class="help-block">Help text here.</p>-->

                        </div>
                        <div class="form-group">
                            <label for="confirmeEmail">Comfirme seu email <span id="obrigatorio">*</span></label>
                            <input type="email" class="form-control" name="confirmeEmail" id="confirmeEmail" placeholder="Confirme seu email">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha <span id="obrigatorio">*</span></label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>

                        <div class="form-group">
                            <label for="confirmeSenha" >Comfirme sua senha <span id="obrigatorio">*</span></label>
                            <input type="password" class="form-control" name="confirmeSenha" id="confirmeSenha" placeholder="Confirme sua senha">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <button type='submit' class='btn btn-primary'>Cadastrar</button>
                    </form>



                </div><!-- fim div container-->

            </div>


      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15353.467035890068!2d-47.89381342749945!3d-15.837309724391611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a24ebfdc77b0b%3A0x306048729dc8b96c!2sDeck+Brasil+Shopping!5e0!3m2!1spt-BR!2sbr!4v1511512846004" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->

            <footer class="container-fluid text-center">
                <a href="https://www.facebook.com/">
                    <i class="fa fa-facebook-square" style="font-size:30px;color: white"> </i>
                </a>
                <a href="https://www.instagram.com/?hl=pt-br">
                    <i class="fa fa-instagram" style="font-size:30px;color: white"></i>
                </a>
                <div class="container-fluid text-left">
                    <img class="img-responsive" height="" src="./images/logo4.png" alt="">
                </div>

                <p> FAÇO E REFAÇO  &copy;  -2017 </p>
                Faço & Refaço LTDA | CNPJ: 00.000.000/0000-00 | Deck Brasil Sul Shopping - SHIS Qi 11 BL O SALA 132 | Lago Sul | Brasília - DF
            </footer>
        </div>
    </div>

</body>
<script type="text/javascript">
    jQuery(function ($) {
        $("#telefone").mask("(99) 99999-9999");
        $("#cpf").mask("999.999.999-99");
        $("#cep").mask("99.999-999");
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#meu_form').validate({
            rules: {
                telefone: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                }

            },
            messages: {
                telefone: {
                    required: "O campo telefone é obrigatorio.",
                },
                email: {
                    required: "O campo email é obrigatorio.",
                    email: "email invalido",
                }

            }
        });
    });
</script>

</html>
