<?php require('app/controller/conect.php');?>
<?php require ('layout/heder.php');?>
<?php require('app/controller/update_controller.php');?>

    

   <!-- </form>
    <form method="POST" action="app/controller/update_controller.php">
    <input type="hidden" name="id" value="<?php //echo $o->pesquisa($id)['id'];?>">
    <label>Nome:</label><input type="text" name="nome" id="senha" value="<?php //echo $o->pesquisa($id)['nome'];?>" ><br>
    <label>Login:</label><input type="text" name="login"value="<?php //echo $o->pesquisa($id)['login'];?>" id="login"><br>
    <button type ="submit" name = "editar" value = "editar"  class="btn btn-success"> Editar </button >
    </form>-->
<div id="cadastro">

<form method="POST" action="app/controller/update_controller.php">
    <div class="row">
        <div class="col-md-2">
            <h5>Dados pessoais:</h5>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $o->pesquisa($id)['id'];?>">

    <div class="row">
        <div class="col-md-2">
            <label>Matricula:</label>
            <input type="text" name="matricula" id="senha"class="form-control" onkeypress="$(this).mask('0000000000');" value="<?php echo $o->pesquisa($id)['matricula'];?>">
            <label>Nome:</label>
            <input type="text" name="nome" id="senha" class="form-control"value="<?php echo $o->pesquisa($id)['nome'];?>">
            <label>CPF:</label>
            <input type="text" name="cpf" id="senha" class="form-control"onkeypress="$(this).mask('000.000.000-00');" value="<?php echo $o->pesquisa($id)['cpf'];?>">
            <label>Telefone:</label>
            <input  class="form-control" type="tel" id="phone" value="<?php echo $o->pesquisa($id)['telefone'];?>" name="telefone" onkeypress="$(this).mask('(00)00000-0000');">
            <label>Data de nascimento:</label>
            <input type="date" name="data_nascimento" id="senha" class="form-control" value="<?php echo $o->pesquisa($id)['data_nascimento'];?>">
            <label>Cep:</label>
            <input class="form-control" value="<?php echo $o->pesquisa($id)['cep'];?>" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onkeypress="$(this).mask('00000-000');"/></label>
        </div>
        <div class="col-md-2">
            <label>Rua:</label>
            <input  class="form-control" value="<?php echo $o->pesquisa($id)['rua'];?>"  name="rua" type="text" id="rua" size="60" /></label>
            <label>Numero:</label>
            <input class="form-control" value="<?php echo $o->pesquisa($id)['numero'];?>"  name="numero" type="text" id="numero" size="2" />
            <label>Bairro:</label>
            <input class="form-control" value="<?php echo $o->pesquisa($id)['bairro'];?>" name="bairro" type="text" id="bairro" size="40" /></label>
            <label>Cidade:</label>
            <input  class="form-control" name="cidade" value="<?php echo $o->pesquisa($id)['cidade'];?>"  type="text" id="cidade" size="40" />
            <label>Estado:</label>
            <input class="form-control" value="<?php echo $o->pesquisa($id)['estado'];?>" name="estado" type="text" id="uf" size="2" />
            <label>Beneficiario:</label>
            <select name="beneficiario" class="form-control">
                <option selected value="<?php echo $o->pesquisa($id)['beneficiario'];?>"><?php echo $o->pesquisa($id)['beneficiario'];?></option>
                <option value="T">T</option>
                <option value="D">D</option>
                <option value="A">A</option>
            </select>
        </div>
        <div class="col-md-2">
            <label>Adesão:</label>
            <input type="date" name="adesao" id="senha" class="form-control" value="<?php echo $o->pesquisa($id)['adesao'];?>">
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-2">
            <h5>Plano de saúde:</h5>
        </div>
        <div class="col-md-2">
            <h5>Plano odontológico:</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 ">
            <label>Tipo:</label>
            <select name="tipo" class="form-control">
                <option selected value="<?php echo $o->pesquisa($id)['tipo_de_plano'];?>"><?php $list=$o->pesquisa($id)['tipo_de_plano'];
                    switch ($list) {
                        case 'afinidade_basico':
                            echo "<td>Afinidade Básico</td>" ;;
                            break;
                        case 'afinidade_pratico':
                            echo "<td>Afinidade Prático</td>";
                            break;
                        case 'afinidade_versatil':
                            echo "<td>Afinidade Versatil</td>";
                            break;
                        case 'plano_gold':
                                echo "<td> Plano Gold</td>";
                            break;
                        case 'pleno_platinum':
                                echo "<td>Pleno Platinum</td>";
                            case 'pleno_diamond':
                            echo "<td>Pleno Diamond</td>";
                            break;
                            }?>
                </option>
                <option value="afinidade_basico">Afinidade Básico</option>
                <option value="afinidade_pratico">Afinidade Prático</option>
                <option value="afinidade_versatil">Afinidade Versatil</option>
                <option value="plano_gold">Plano Gold</option>
                <option value="pleno_platinum">Pleno Platinum</option>
                <option value="pleno_diamond">Pleno Diamond</option>
            </select>
            <label>faixa etaria:</label>
            <select name="faixa" class="form-control">
                <option selected value="<?php echo $o->pesquisa($id)['faixa_etaria'];?>"><?php 
                    $list= $o->pesquisa($id)['faixa_etaria'];
                    switch ($list) {
                        case 1:
                            echo "<td>até 18 anos</td>" ;
                            break;
                        case 2:
                            echo "<td>de 19 até 23 anos</td>";
                            break;
                        case 3:
                            echo "<td>de 24 até 28 anos</td>";
                            break;
                        case 4:
                                echo "<td>de 29 até 33 anos</td>";
                            break;
                        case 5:
                                echo "<td>de 34 até 38 anos</td>";
                            break;
                        case 6:
                                echo "<td>de 39 até 43 anos</td>";
                            break;
                        case 7:
                                echo "<td>de 44 até 48 anos</td>";
                            break;
                        case 8:
                                echo "<td>de 49 até 53 anos</td>";
                            break;
                        case 9:
                                echo "<td>de 54 até 58 anos</td>";
                            break; 
                        case 10:
                                echo "<td>mais de 59 anos</td>";
                            break;                
                    }?></option>
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
        <div class="col-md-2">
            <label>Tipo:</label>
            <select name="tipo_odonto" class="form-control">
                <option selected value="<?php echo $o->pesquisa($id)['tipo_de_plano_odonto'];?>">
                    <?php echo $o->pesquisa($id)['tipo_de_plano_odonto'];?>
                </option>
                <option value="gold">Plano Gold</option>
                <option value="platinum">Pleno Platinium</option>
                <option value="diamond">Pleno Diamond</option>
            </select>
        </div>
    </div>
    <div class="mt-2 mb-3">
        <input type="submit" value="editar" id="cadastrar" name="editar"class="btn btn-success">
    </div>
</form>
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

</div>
    

<?php require ('layout/footer.php'); ?>