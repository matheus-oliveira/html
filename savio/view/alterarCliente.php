<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <title></title>
        <style>
            body{
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
        require_once '../dao/ClienteDAO.php';
        $id = $_REQUEST["id"]; // $_GET[""]
        $clienteDAO = new ClienteDAO();
        $cliente = $clienteDAO->getClienteById($id);
        
        //select estados
        $estados["DF"] = "Distrito Federal";
        $estados["SP"] = "São Paulo";
        $estados["RJ"] = "Rio de Janeiro";
        $estados["MG"] = "Minas Gerais";
        
        ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="../controller/alterarClienteController.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $cliente["id"] ?>"/>
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" value="<?php echo $cliente["nome"] ?>" name="nome" class="form-control" id="nome" required="true" placeholder="Digite o seu nome completo">
                        </div>
                        <div class="form-group">
                            <label>Rg:</label>
                            <input type="text" value="<?php echo $cliente["rg"] ?>" name="rg" class="form-control" id="rg">
                        </div>                
                        <div class="form-group">
                            <label>Cpf:</label>
                            <input type="text" value="<?php echo $cliente["cpf"] ?>" name="cpf" class="form-control" id="cpf">
                        </div>                                
                        <div class="form-group">
                            <label>Data de nascimento:</label>
                            <input type="date" name="dtnasc" value="<?php echo $cliente["datanascimento"] ?>" class="form-control" id="dtnasc">
                        </div>                                                
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input type="text" name="endereco" value="<?php echo $cliente["endereco"] ?>" class="form-control" id="endereco">
                        </div>                                                                
                        <div class="form-group">
                            <label>Estado:</label>
                            <select name="estado" class="form-control" id="estado">
                                <option value="">::Selecione::</option>
                                <?php
                                        foreach ($estados as $sigla => $desc) {
                                            if ($cliente["estado"] == $sigla){
                                                echo "<option selected value='{$sigla}'>{$desc}</option>";
                                            }else{
                                                echo "<option value='{$sigla}'>{$desc}</option>";
                                            }
                                            
                                        }    
                                ?>
                            </select>                    
                        </div>                                                
                        <div class="form-group">
                            <label>Cidade:</label>
                            <input type="text" value="<?php echo $cliente["cidade"] ?>" name="cidade" class="form-control" id="cidade">
                        </div>                                                                
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp;Alterar</button>               
                    </form>
                </div>
            </div>
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
