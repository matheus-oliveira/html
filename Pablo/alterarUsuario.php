<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/master.css">
        <script src="./js/jquery-3.2.1.min.js"></script>
        <script src=".js/bootstrap.min.js"></script>
        <style media="screen">
            span{
                color: #f0682e;
            }

        </style>
    </head>
    <body>
        <?php
        require_once '../dao/usuarioDAO.php';
        $id = $_REQUEST["id"]; // $_GET[""]
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->getUsuarioById($id);
        $id = $_REQUEST["id"]; // $_GET[""]
        $usuarioDAO = new UsuarioDAO();
        $telefone = $usuarioDAO->getTelefoneById($id);
        $id = $_REQUEST["id"]; // $_GET[""]
        $usuarioDAO = new UsuarioDAO();
        $endereco = $usuarioDAO->getEnderecoById($id);
        ?>

        <div class="container  col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-3">
                <!--responsavel pelo alinhamento ao centro do
                  form definido para ocupar 3 posicoes na grid do lado direito--->
            </div>
            <form class="col-md-6" action="./alterarUsuarioController.php" method="post">

                <input type="hidden" name="id" value="<?php echo $usuario["id"] ?>">
                <input type="hidden" name="id" value="<?php echo $usuario["id_endereco"] ?>">

                <div class="form-group">
                    <label for="nome">Nome: <span>*</span></label>
                    <input type="text"  value="<?php echo $usuario["nome"] ?>" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
                    <!-- <p class="help-block">Help text here.</p>-->
                </div>
                <div class="form-group">
                    <label for="cpf">Cpf <span>*</span></label>
                    <input type="text" value="<?php echo $usuario["cpf"] ?>" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF">
                    <!-- <p class="help-block">Help text here.</p>-->
                </div>
                <div class="form-group" >
                    <label for="sexo">Sexo <span>*</span></label>
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
                    <label for="dataNasc">Data de nascimento <span>*</span></label>
                    <input type="date"  value="<?php echo $usuario["dataNasc"] ?>" class="form-control" name="dataNasc" id="dataNasc">
                    <!-- <p class="help-block">Help text here.</p>-->
                </div>
                <div class="row ">

                    <div class="col-xs-10" >
                        <label for="endereco">Endereço <span>*</span></label>
                        <input type="text" value="<?php echo $endereco["endereco"] ?>" class="form-control" name="endereco" id="endereco" placeholder="Digite seu endereço completo">
                    </div>
                    <div class="col-xs-2" >
                        <label for="casa">Casa <span>*</span></label>
                        <input type="casa" value="<?php echo $endereco["casa"] ?>" class="form-control" name="casa" id="casa" placeholder="Nº">
                    </div>

                    <div id="top10px" class="form-group col-xs-9">
                        <label for="complemento">Complemento</label>
                        <input type="text" value="<?php echo $endereco["complemento"] ?>" class="form-control" name="complemento" id="complemento" placeholder="Digite complemento se necessário">
                    </div>

                    <div id="top10px" class="form-group col-xs-3">
                        <label for="cep">CEP <span>*</span></label>
                        <input type="text" value="<?php echo $endereco["cep"] ?>" class="form-control" name="cep" id="cep" placeholder="Digite o CEP">
                    </div>
                </div><!-- fim row -->

                <div class="form-group">
                    <label for="telefone">Telefone <span>*</span></label>
                    <input type="tel" value="<?php echo $telefone["telefone"] ?>" class="form-control" name="telefone" id="telefone" placeholder="Digite seu telefone">
                </div>


                <div class="form-group">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" value="<?php echo $usuario["email"] ?>" class="form-control" name="email" id="email" placeholder="Digite seu email">
                </div>



                <button type='submit' class='btn btn-primary'>Atualizar</button>


            </form>
            <div class="col-md-3">
                <!--responsavel pelo alinhamento ao centro do
                  form definido para ocupar 3 posicoes na grid do lado direito--->
            </div>



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
                        <p>Atualizado com sucesso!!!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                    </div>
                </div>

            </div>
        </div>





    </div><!-- fim div container-->

</form>
</body>
</html>
