<?php //require('app/controller/conect.php');?>
<?php require ('layout/heder.php');?>

<div id="cadastro">

<form method="POST" action="app/controller/create_controller.php">
    <div class="form-group col-md-1">
        <label>Matricula:</label>
        <input type="text" name="matricula" id="senha"class="form-control"onkeypress="$(this).mask('0000000000');">
    </div>
    <div class="row">
    <div class="col-md-3">
        <label>Nome:</label>
        <input type="text" name="nome" id="senha" class="form-control">
    </div>
    <div class="col-md-3">
        <label>CPF:</label>
        <input type="text" minlength="14" maxlength="14" name="cpf" id="cpf" class="form-control"onkeypress="$(this).mask('000.000.000-00');">
    </div>
</div>
<div class="row">
    <div class="col-md-2 ">
        <label>Tipo:</label>
        <select name="tipo" class="form-control">
        <option selected>Escolher</option>
        <option value="afinidade_basico"> Afinidade Básico </option>
        <option value="afinidade_pratico"> Afinidade Prático</option>
        <option value="afinidade_versatil"> Afinidade Versatil</option>
        <option value="plano_gold"> Plano Gold</option>
        <option value="pleno_platinum"> Pleno Platinum </option>
        <option value="pleno_diamond"> Pleno Diamond</option>
      </select>
    </div>
    <div class="col-md-1">
    <label>Beneficiario:</label>
        <select name="beneficiario" class="form-control">
            <option selected>Escolher</option>
            <option value="T">T</option>
            <option value="D">D</option>
            <option value="A">A</option>
        </select>
    </div>
    <div class="col-md-3">
        <label>Telefone:</label>
        <input  class="form-control" type="tel" id="phone" name="telefone" onkeypress="$(this).mask('(00)00000-0000');">
    </div>
    </div>
    <div class="row">
    <div class="col-md-2">
    <label>Adesão:</label>
    <input type="date" name="adesao" id="senha" class="form-control">
    </div>
    <div class="col-md-2">
    <label>Data de nascimento:</label>
    <input type="date" name="data_nascimento" id="senha" class="form-control">
    </div>
    <div class="col-md-3">
    <label>faixa etaria:</label>
    <select name="faixa" class="form-control">
            <option selected>Escolher</option>
            <option value="1">até 18 anos</option>
            <option value="2">de 19 até 23 anos</option>
            <option value="3">de 24 até 28 anos</option>
            <option value="4">de 29 até 33 anos</option>
            <option value="5">de 34 até 38 anos</option>
            <option value="6">de 39 até 43 anos</option>
            <option value="7">de 44 até 48 anos</option>
            <option value="8">de 49 até 53 anos</option>
            <option value="9">de 54 até 58 anos</option>
            <option value="10">mais de 59 anos</option>
    </select>
    </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <label>Cep:</label>
            <input class="form-control"  name="cep" type="text" id="cep" value="" size="10" maxlength="9" onkeypress="$(this).mask('00000-000');"/></label>
        </div>
        <div class="col-md-4">
            <label>Rua:</label>
            <input  class="form-control" name="rua" type="text" id="rua" size="60" /></label>
        </div>
        <div class="col-md-1">
            <label>Numero:</label>
            <input class="form-control" name="numero" type="text" id="numero" size="2" />
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-2">
            <label>Bairro:</label>
            <input class="form-control" name="bairro" type="text" id="bairro" size="40" /></label>
        </div>
        <div class="col-md-2">
            <label>Cidade:</label>
            <input  class="form-control" name="cidade" type="text" id="cidade" size="40" />
        </div>
        <div class="col-md-1">
            <label>Estado:</label>
            <input class="form-control" name="estado" type="text" id="uf" size="2" />
        </div>
    </div>
    <div class="mt-2 mb-3">
    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"class="btn btn-success">
    </div>
    </div>
</form>

</div>
<script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
<?php include ('layout/footer.php'); ?>