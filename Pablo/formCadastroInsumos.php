<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="./js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="./js/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="./js/jquery.validate.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container  col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-3">
                <!--responsavel pelo alinhamento ao centro do
                  form definido para ocupar 3 posicoes na grid do lado direito--->
            </div>
            <input type="hidden" name="id" value="id">
            <form id="meu_form" class="col-md-6" action="./salvarCadastroInsumoController.php"   method="post">

                <div class="row ">

                    <div class="col-xs-6">
                        <label for="produto">Produto</label>
                        <input type="text" class="form-control" name="produto" id="produto" placeholder="Digite qual o produto">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>
                    <div class="col-xs-6">
                        <label for="tipo">Tipo</label>
                        <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Qual o tipo de produto">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>

                    <div class="col-xs-4" >
                        <label for="quantidade">Quantidade</label>
                        <input type="int" class="form-control" name="quantidade" id="quantidade" placeholder="Digite a Quantidade">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>

                    <div class="col-xs-4">
                        <label for="preco">Preço</label>
                        <input type="int" class="form-control" name="preco" id="preco" placeholder="$$">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>
                    <div class="col-xs-4">
                        <label for="dataCompra">Data de Compra</label>
                        <input type="date" class="form-control" name="dataCompra" id="dataCompra" placeholder="">
                    </div>
                </div><!-- fim row -->
                <br>
                <button type='submit' class='col-md-12 btn btn-primary'>Cadastrar</button>
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
