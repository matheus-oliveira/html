<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Prova Recuperação</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sortcut icon" href="../images/pink-306516_960_720.jpg" width=""  type="image/jpg" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/style.min.css" rel="stylesheet"/>
        <link href="css/estilos.css" rel="stylesheet" />
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="./js/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="./js/jquery.validate.min.js" type="text/javascript"></script>

        <script>
       $.validator.setDefaults( {
        submitHandler: function () {
          alert( "Cadastrado!" );
           }
       } );
       $( document ).ready( function () {
       $( "#form" ).validate( {
       rules: {
       nome: "required",
       sobrenome: "required",
       cpf: "required",
       cep: "required",
       quantidade:"required",

       senha: {
           required: true,
           minlength: 5
       },
       confirm_senha: {
           required: true,
           minlength: 5,
           equalTo: "#senha"
       },
       email: {
           required: true,
           email: true
       },
       agree: "required"
       },
       messages: {
       nome: "Digite seu nome",
       sobrenome: "Digite seu sobrenome",
       cpf:"Informe um cpf válido",
       cep:"Digite seu CEP",
       quantidade:'Nº',

       senha: {
           required: " Insira uma senha",
           minlength: "Sua senha precisa de pelo menos 5 caracteres"
       },
       confirm_senha: {
           required: "Insira uma senha",
           minlength: "Sua senha precisa de pelo menos 5 caracteres",
           equalTo: "Senha não confere"
       },
       email: "Digite um email válido",
       agree: "Aceite nossos termos"
       },
       errorElement: "em",
       errorPlacement: function ( error, element ) {
       // Add the `help-block` class to the error element
       error.addClass( "help-block" );

       // Add `has-feedback` class to the parent div.form-group
       // in order to add icons to inputs
       element.parents( ".col-sm-5" ).addClass( "has-feedback" );

       if ( element.prop( "type" ) === "checkbox" ) {
           error.insertAfter( element.parent( "label" ) );
       } else {
           error.insertAfter( element );
       }

       // Add the span element, if doesn't exists, and apply the icon classes to it.
       if ( !element.next( "span" )[ 0 ] ) {
           $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
       }
       },
       success: function ( label, element ) {
       // Add the span element, if doesn't exists, and apply the icon classes to it.
       if ( !$( element ).next( "span" )[ 0 ] ) {
           $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
       }
       },
       highlight: function ( element, errorClass, validClass ) {
       $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
       $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
       },
       unhighlight: function ( element, errorClass, validClass ) {
       $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
       $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
       }
       } );
       } );
     </script>
     <!--Valida CPF -->
     <script>

$(function()
{
   //Executa a requisição quando o campo username perder o foco
   $('#cpf').blur(function()
   {
       var cpf = $('#cpf').val().replace(/[^0-9]/g, '').toString();

       if( cpf.length == 11 )
       {
           var v = [];

           //Calcula o primeiro dígito de verificação.
           v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
           v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
           v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
           v[0] = v[0] % 11;
           v[0] = v[0] % 10;

           //Calcula o segundo dígito de verificação.
           v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
           v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
           v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
           v[1] = v[1] % 11;
           v[1] = v[1] % 10;

           //Retorna Verdadeiro se os dígitos de verificação são os esperados.
           if ( (v[0] != cpf[9]) || (v[1] != cpf[10]) )
           {
               alert('CPF inválido: ' + cpf);

               $('#cpf').val('');
               $('#cpf').focus();
           }
       }
       else
       {
           alert('CPF inválido:' + cpf);

           $('#cpf').val('');
           $('#cpf').focus();
       }
   });
});
</script>
    </head>
    <body>

      <?php
      require_once '../dao/produtoDAO.php';
      $id = $_REQUEST["id"]; // $_GET[""]
      $produtoDAO = new ProdutoDAO();
      $produto = $produtoDAO->getProdutoById($id);
      ?>





                <div class="container text-center">
                    <h3>Alterar Produto</h3><br>
                </div>
                <div class="col-md-3">
                  <!-- esta div e responsavel por centelizar o formulario
                  tbm e necesario colocar uma col-md-6 na div que envolve o form -->
                </div>
                <div class="col-md-6 container-fluid">
                    <form  action="../controller/alterarProdutoController.php" method="post" id="form">
                      <input type="hidden" name="id" value="<?php echo $produto["id"] ?>">


                    <label>Nome</label>
                    <input type="text" value="<?php echo $produto["nome"] ?>" id="nome" name="nome" placeholder="Nome" class="form-control"><BR>
                    <label>Quantidade</label>
                        <input type="number" value="<?php echo $produto["quantidade"] ?>" id="quantidade" name="quantidade" placeholder="Nº" class="form-control"><BR>
                          <label>Fabricante</label>
                          <input type="text" value="<?php echo $produto["fabricante"] ?>" id="fabricante" name="fabricante" placeholder="Fabricante" class="form-control"><BR>
                        <label>Data de Cadastro</label>
                        <input type="date" value="<?php echo $produto["dataCadastro"] ?>" id="dataCadastro" name="dataCadastro" placeholder="" class="form-control">
                    <label>Preço</label>
                        <input type="text" value="<?php echo $produto["preco"] ?>" id="preco" name="preco" placeholder="Preço" class="form-control"><BR>

                        <button TYPE="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-primary" id="voltar">Cancelar</button>
                </form>
                </div>
                <!--Script de busca pelo CEP -->
                <script>
                    $("#cep").blur(function(){
                      var cep = this.value.replace(/[^0-9]/, "");
                      if(cep.length!==8){
                          return false;
                      }
                      var url = "http://viacep.com.br/ws/"+cep+"/json/";
                      $.getJSON(url, function(dadosRetorno){
                      try{
                        $("#endereco").val(dadosRetorno.logradouro);
                        $("#bairro").val(dadosRetorno.bairro);
                        $("#cidade").val(dadosRetorno.localidade);
                        $("#estado").val(dadosRetorno.uf);
                        }catch(ex){}
                         });
                        });
                    </script>
                   <!--Script de máscara -->
                    <script type="text/javascript">
                    $(document).ready(function($){
                        $("#dataCadastro").mask("99/99/9999");
                        $("#tel").mask("(99)99999-9999");
                        $("#cpf").mask("999.999.999-99");
                        $("#cep").mask("99.999-999");
                        $("#cnpj").mask("99.999.999/9999-999");
                        $("#valor").maskMoney({symbol:"R$",decimal:",",thousands:"."});
                });

                    </script>

                    <!-- script para fazer a página retonar para o index caso a pessoa cancele o cadastro -->
                    <script>
                        //primeiro você chama através da ID o elemento button
                        //com o evento .click crie uma função
                         $("#voltar").click(function(){
                        //crie uma variavel qualquer e faça ela receber o método confirm
                              var r = confirm("Deseja realmente sair?");
                        //aqui é completar a função usando um if e else
                        //onde a variavel terá duas escolhas, true e false
                              if (r === true) {
                        //use o objeto LOCATION pra redirecionar para as páginas
                               location.href='index.php';
                              } else {
                                  location.href='cadastro.php';
                                }
                           });
                    </script>

                </body>
                </html>
