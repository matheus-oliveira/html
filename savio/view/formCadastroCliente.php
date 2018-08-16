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
        require_once '../dao/UsuarioDAO.php';
        $usuarioDAO = new UsuarioDAO();
        $perfil = $usuarioDAO->getAllPerfil();
        ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="../controller/salvarClienteController.php" method="post">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" name="nome" class="form-control" id="nome" required="true" placeholder="Digite o seu nome completo">
                        </div>
                        <div class="form-group">
                            <label>Rg:</label>
                            <input type="text" name="rg" class="form-control" id="rg">
                        </div>                
                        <div class="form-group">
                            <label>Cpf:</label>
                            <input type="text" name="cpf" class="form-control" id="cpf">
                        </div>                                
                        <div class="form-group">
                            <label>Data de nascimento:</label>
                            <input type="date" name="dtnasc" class="form-control" id="dtnasc">
                        </div>                                                
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input type="text" name="endereco" class="form-control" id="endereco">
                        </div>                                                                
                        <div class="form-group">
                            <label>Estado:</label>
                            <select name="estado" class="form-control" id="estado">
                                <option value="">::Selecione::</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="SP">São Paulo</option>
                            </select>                    
                        </div>                          
                        <div class="form-group">
                            <label>Cidade:</label>
                            <input type="text" name="cidade" class="form-control" id="cidade">
                        </div>  
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="text" name="email" class="form-control" id="email" required="true" placeholder="Digite o seu nome completo">
                        </div>                        
                        <div class="form-group">
                            <label>Senha:</label>
                            <input type="password" name="senha" class="form-control" id="senha" required="true" placeholder="Digite o seu nome completo">
                        </div>                        
                        <div class="form-group">
                            <label>Perfil:</label>
                            <select name="perfil" class="form-control" id="perfil">
                                <option value="">::Selecione::</option>
                                <?php
                                foreach ($perfil as $p) {                                   
                                        echo "<option value='{$p["id"]}'>{$p["perfil"]}</option>";                                    
                                }
                                ?>
                            </select>                    
                        </div>                         
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp;Salvar</button>               
                        <button type="reset" class="btn btn-default">Limpar</button>
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
