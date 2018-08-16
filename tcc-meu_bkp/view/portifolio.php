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
            .hoverzoom {
                position: relative;
                width: 350px;
                overflow: hidden;
            }
            .hoverzoom > img {
                width: 100%;
                border-radius: 2px;
                -webkit-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            }
            .hoverzoom:hover > img {
                -webkit-transform: scale(1.5);
                -moz-transform: scale(1.5);
                -ms-transform: scale(1.5);
                -o-transform: scale(1.5);
                transform: scale(1.5);
            }
            .hoverzoom .retina{
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                opacity: 0;
                background: none repeat scroll 0 0 rgba(40, 40, 39, 0.41);
                border-radius: 2px;
                text-align: center;
                padding: 30px;
                -webkit-transition:	 all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
                transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            }
            .hoverzoom:hover .retina {
                opacity: 1;
                box-shadow: inset 0 0 100px 50px rgba(190, 33, 85, 0.40);
            }
            .hoverzoom .retina p {
                /*background: rgba(40, 40, 39, 0.41);*/
                color: #fff;
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
                                    <img class="img-responsive" height="" src="../images/logo2.png" alt="">
                                    </div>
                                    <div class="dropdown">
                                        <a href="#">
                                            <button class="dropbtn" id="estilo_fonte" >PORTIFÓLIO</button>
                                        </a>
                                    </div>
                                    <!-- <div class="dropdown">
                                      <a href="quem_somos.php">
                                      <button class="dropbtn" id="estilo_fonte" >QUEM SOMOS</button>
                                      </a>
                                      </div> -->
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

                                                    <a href="./formCadastroCliente.php">
                                                        <button type="button" class="btn btn-primary btn-block" id="alinharButton"><span class="glyphicon glyphicon-pencil"></span>Cadastre-se</button>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </nav>


            </div>



            <div class="container text-center">
                <div class="container">
                    <h1>Básicos</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/Básicos/543-8403-018_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Blusa Cola V Estampada Feminina - Rosa</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Básicos/H58-1015-016_zoom1.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camiseta Regata Estampada Feminina - Vermelha</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Básicos/V54-0015-006_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camiseta Regata Estampada Feminina - Preta</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Básicos/V54-0017-014_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camiseta Regata Estampada Feminina - Branca</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Básicos/V54-0018-014_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Blusa Cola V Estampada Feminina - Branca</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Básicos/V54-0022-188_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camiseta Regata Estampada Feminina - Cinza</h2>
                    </div>
                </div>
            </div><br>

            <div class="container text-center">
                <div class="container">
                    <h1>Calças</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/Calças Femininas/E69-0471-325_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Calça Jeans Skinny Rasgada</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Calças Femininas/E69-0472-325_zoom1.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Calça Jeans Skinny Lavagem Escura</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Calças Femininas/F50-0944-325_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Calça Jeans Skinny Lavagem Azul Marinho</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Calças Femininas/F50-1033-325_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Calça Jeans Skinny Rasgada Barra Dobrada </h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Calças Femininas/G05-0791-325_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Calça Jeans Skinny </h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Calças Femininas/G85-0089-325_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Calça Pantacourt Audiovisual Fenda na Barra Feminina</h2>
                    </div>
                </div>
            </div><br>
            <div class="container text-center">
                <div class="container">
                    <h1>Camisas</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/Camisas Femininas/EPB-0059-306_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camisa Floral Feminina - Rosa </h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Camisas Femininas/EPB-0086-054_zoom1.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camisa Estampada Feminina - Verde</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Camisas Femininas/ESK-0023-310_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camisa Social Feminina - Azul</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Camisas Femininas/H37-0269-010_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camisa Estampada Feminina - Cinza </h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Camisas Femininas/H37-0454-012_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camisa Feminina - Azul Marinho</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Camisas Femininas/S93-0024-016_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Camisa Social Feminina - Vermelha </h2>
                    </div>
                </div>
            </div><br>
            <div class="container text-center">
                <div class="container">
                    <h1>Jaquetas e Casacos</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/Jaquetas e Casacos Feminino/398-0160-018_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Casaco De Nylon Alongado Com Zíper</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Jaquetas e Casacos Feminino/ANK-0356-862_zoom1.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Jaqueta Moletom Patches - Mescla</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Jaquetas e Casacos Feminino/AXD-0661-014_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Jaqueta Moletom Patches - Branco</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Jaquetas e Casacos Feminino/AXD-2460-008_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Jaqueta Jeans Indigo Estonada Feminina </h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Jaquetas e Casacos Feminino/AXD-3224-060_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Jaqueta Moletom - Verde</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Jaquetas e Casacos Feminino/DOR-0468-006_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Jaqueta Moletom de Bolinhas - Preto e Branco</h2>
                    </div>
                </div>
            </div><br>
            <div class="container text-center">
                <div class="container">
                    <h1>Malhas e Tricôs</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/Malhas e Tricôs Feminino/AXD-0472-006_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Tricot Listrado - preto e Branco</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Malhas e Tricôs Feminino/DWH-0008-128_zoom1.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Poncho Friga</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Malhas e Tricôs Feminino/DWH-0009-008_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Malha Strass Ombro E Zíper - Marinho</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Malhas e Tricôs Feminino/E33-4681-030_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Tricot com Detalhes Floridos </h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Malhas e Tricôs Feminino/E33-5219-010_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Tricot Manga 3/4 Tinturado Canelado Feminino</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/Malhas e Tricôs Feminino/E33-5228-006_zoom1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Moletom Bordado com Renda Feminino</h2>
                    </div>
                </div>
            </div><br>
            <div class="container text-center">
                <div class="container">
                    <h1>Moda Praia</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/moda praia/moda praia1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Conjunto de Biquíni de Amarrar Top Cortininha com Bojo</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/moda praia/mp2.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Maiô Asa Delta</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/moda praia/mp3.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Conjunto de Biquíni Tanga Com Bojo Cia Marítima Transpassado Tropical - Verde água</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/moda praia/mp4.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Maiô Decote Fenda</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/moda praia/mp5.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Maiô Engana Mamãe Amarração Pescoço</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/moda praia/mp6.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Conjunto de Biquíni Tomara que Caia Bojo Alça Removível - Azul e Laranja</h2>
                    </div>
                </div>
            </div><br>
            <div class="container text-center">
                <div class="container">
                    <h1>Saias</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/saias/saia1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Saia Assimétrica Floral </h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/saias/saia2.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Saia Assimétrica Estampada </h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/saias/saia3.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Saia Assimétrica Floral - Azul e Verde</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/saias/saia4.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Saia Assimétrica Floral - Azul e Dourado</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/saias/saia5.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Saia Média Feminina</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/saias/saia6.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Saia Midi Lisa </h2>
                    </div>
                </div>
            </div><br>
            <div class="container text-center">
                <div class="container">
                    <h1>Vestido Curto</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido curto/vestidocurto1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Evasê Ziper</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido curto/vestidocurto2.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Reto Curto Estampado - Branco</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido curto/vestidocurto3.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Curto Estampado Recorte no Ombro e Babados</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido curto/vestidocurto4.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Curto Estampado</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido curto/vestidocurto5.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Curto Estampado</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido curto/vestidocurto6.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Ombro a Ombro Curto Estampado</h2>
                    </div>
                </div>
            </div><br>
            <div class="container text-center">
                <div class="container">
                    <h1>Vestido Longo</h1>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido longo/ves1.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Longo Estampado</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido longo/ves2.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Longo Estampado</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido longo/ves3.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Longo Tropical</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido longo/ves4.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Longo Floral</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido longo/ves6.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Longo Floral</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="../images/roupas/vestido longo/ves7.jpg" class="img-responsive" id="estilo_imagem" style="width:100%" alt="Image">
                        <h2 id=estilo_fonte>Vestido Longo Floral</h2>
                    </div>
                </div>
            </div><br>
        </div>
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15353.467035890068!2d-47.89381342749945!3d-15.837309724391611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a24ebfdc77b0b%3A0x306048729dc8b96c!2sDeck+Brasil+Shopping!5e0!3m2!1spt-BR!2sbr!4v1511512846004" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->

        <footer class="container-fluid text-center"> <!--começo do rodapé-->
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
    </div>
</div>

</body>
</html>
