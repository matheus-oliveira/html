        <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/master.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="container  col-md-12 col-sm-12 col-xs-12">
      <div class="col-md-3">
        <!--responsavel pelo alinhamento ao centro do
          form definido para ocupar 3 posicoes na grid do lado direito--->
      </div>
<form class="col-md-6" action="../controller/salvarCadastroClienteController.php" method="post">


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





  </div><!-- fim div container-->

    </form>
  </body>
</html>
