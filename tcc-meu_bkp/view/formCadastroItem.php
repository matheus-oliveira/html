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
            <form id="meu_form" class="col-md-6" action="./salvarCadastroInsumoController.php"   method="post">

                <div class="row ">

                    <div class="col-md-12">
                        <label for="produto">Produto</label>
                        <input type="text" class="form-control" name="produto" id="produto" placeholder="Digite qual o produto">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>
                    <div class="col-md-12">
                        <label for="cintura">Cintura</label>
                        <input type="text" class="form-control" name="cintura" id="cintura" placeholder="Qual o cintura de produto">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>

                    <div class="col-md-12" >
                        <label for="alturaQuadril">Altura do quadril</label>
                        <input type="text" class="form-control" name="alturaQuadril" id="alturaQuadril" placeholder="Digite a Quantidade">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>

                    <div class="col-md-12">
                        <label for="quadril">Quadril</label>
                        <input type="text" class="form-control" name="quadril" id="quadril" placeholder="$$">
                        <!-- <p class="help-block">Help text here.</p>-->
                    </div>
                    <div class="col-md-12">
                        <label for="comprimento">Comprimento</label>
                        <input type="text" class="form-control" name="comprimento" id="comprimento" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="gancho">Gancho</label>
                        <input type="text" class="form-control" name="gancho" id="gancho" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="ombro">Ombro</label>
                        <input type="text" class="form-control" name="ombro" id="ombro" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="costa">Costa</label>
                        <input type="text" class="form-control" name="costa" id="costa" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="busto">Busto</label>
                        <input type="text" class="form-control" name="busto" id="busto" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="alturaBusto">Altura do busto</label>
                        <input type="text" class="form-control" name="alturaBusto" id="alturaBusto" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="alturaCintura">Altura da cintura</label>
                        <input type="text" class="form-control" name="alturaCintura" id="alturaCintura" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="manga">Manga</label>
                        <input type="text" class="form-control" name="manga" id="manga" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="punho">Punho</label>
                        <input type="text" class="form-control" name="punho" id="punho" placeholder="">
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
