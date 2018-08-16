<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <title></title>
        <style>
            body{
                padding: 10px;
            }

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
        </style>
    </head>
    <body>
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
        <?php
        require_once '../dao/insumoDAO.php';
        $id = $_REQUEST["id"]; // $_GET[""]
        $insumoDAO = new InsumoDAO();
        $insumo = $insumoDAO->getInsumoById($id);
        ?>
        <div class="container  col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-3">
                <!--responsavel pelo alinhamento ao centro do
                  form definido para ocupar 3 posicoes na grid do lado direito--->
            </div>
            <form id="meu_form" class="col-md-6" action="../controller/alterarInsumoController.php"   method="post">

            <input type="hidden" name="id" value="<?php echo $insumo["id"] ?>">


                <div class="row ">

                    <div class="col-xs-6">
                        <label for="produto">Produto</label>
                        <input type="text" value="<?php echo $insumo["produto"] ?>" class="form-control" name="produto" id="produto" placeholder="Digite qual o produto">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>
                    <div class="col-xs-6">
                        <label for="tipo">Tipo</label>
                        <input type="text" value="<?php echo $insumo["tipo"] ?>" class="form-control" name="tipo" id="tipo" placeholder="Qual o tipo de produto">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>

                    <div class="col-xs-4" >
                        <label for="quantidade">Quantidade</label>
                        <input type="int" value="<?php echo $insumo["quantidade"] ?>" class="form-control" name="quantidade" id="quantidade" placeholder="Digite a Quantidade">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>

                    <div class="col-xs-4">
                        <label for="preco">Preço</label>
                        <input type="int" value="<?php echo $insumo["preco"] ?>" class="form-control" name="preco" id="preco" placeholder="$$">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>
                    <div class="col-xs-4">
                        <label for="dataCompra">Data de Compra</label>
                        <input type="date" value="<?php echo $insumo["dataCompra"] ?>" class="form-control" name="dataCompra" id="dataCompra" placeholder="">
                    </div>
                </div><!-- fim row -->
                <br>
                <button type='submit' class='col-md-12 btn btn-primary'>Alterar</button>
            </form>

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
        </div><!-- fim div container-->

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
