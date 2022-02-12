    <?php //require('app/controller/conect.php');?>
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
    <input type="hidden" name="id" value="<?php echo $o->pesquisa($id)['id'];?>">
    <div class="form-group col-md-1">
        <label>Matricula:</label>
        <input type="text" name="matricula" id="senha"class="form-control" onkeypress="$(this).mask('0000000000');" value="<?php echo $o->pesquisa($id)['matricula'];?>">
    </div>
    <div class="row">
    <div class="col-md-3">
        <label>Nome:</label>
        <input type="text" name="nome" id="senha" class="form-control"value="<?php echo $o->pesquisa($id)['nome'];?>">
    </div>
    <div class="col-md-3">
        <label>CPF:</label>
        <input type="text" name="cpf" id="senha" class="form-control"onkeypress="$(this).mask('000.000.000-00');" value="<?php echo $o->pesquisa($id)['cpf'];?>">
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
              case 'afinidade_dinamico':
                      echo "<td> Afinidade Dinâmico</td>";
                  break;
              case 'afinidade_lider':
                      echo "<td>Afinidade Lider</td>";
                  break;
                  }?></option>
        <option value="afinidade_basico"> Afinidade Básico </option>
        <option value="afinidade_pratico"> Afinidade Prático</option>
        <option value="afinidade_versatil"> Afinidade Versatil</option>
        <option value="afinidade_dinamico"> Afinidade Dinâmico</option>
        <option value="afinidade_lider"> Afinidade Lider </option>

      </select>
    </div>
    <div class="col-md-2">
    <label>Beneficiario:</label>
        <select name="beneficiario" class="form-control">
            <option selected value="<?php echo $o->pesquisa($id)['beneficiario'];?>"><?php echo $o->pesquisa($id)['beneficiario'];?></option>
            <option value="Titular">Titular</option>
            <option value="Dependente">Dependente</option>
        </select>
    </div>
        <div class="col-md-2">
            <label>Idade:</label>
            <input type="text" name="idade" id="senha" class="form-control" onkeypress="$(this).mask('#00');" value="<?php echo $o->pesquisa($id)['idade'];?>">
        </div>
    </div>
    <div class="row">
    <div class="col-md-2">
    <label>Adesão:</label>
    <input type="date" name="adesao" id="senha" class="form-control" value="<?php echo $o->pesquisa($id)['adesao'];?>">
    </div>
    <div class="col-md-2">
    <label>Data de nascimento:</label>
    <input type="date" name="data_nascimento" id="senha" class="form-control" value="<?php echo $o->pesquisa($id)['data_nascimento'];?>">
    </div>
    <div class="col-md-3">
    <label>faixa etaria:</label>
    <select name="faixa" class="form-control">
        
            <option selected value="<?php echo $o->pesquisa($id)['faixa_etaria'];?>"><?php 
            $list= $o->pesquisa($id)['faixa_etaria'];
             switch ($list) {
                case 1:
                    echo "<td>até 18 anos</td>" ;;
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
    </div>
    <div class="row">
        <div class="col-md-2">
            <label>Desconto:</label>
            <input type="text" name="desconto" id="senha" class="form-control" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});" value="<?php echo $o->pesquisa($id)['desconto'];?>">
        </div>
        <div class="col-md-2">
            <label>Total:</label>
            <input type="text" name="total" id="senha" class="form-control" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});" value="<?php echo $o->pesquisa($id)['desconto_total'];?>">
        </div>
    </div>
    <div class="mt-2 mb-3">
    <input type="submit" value="editar" id="cadastrar" name="editar"class="btn btn-success">
    </div>
</form>

</div>
    

<?php require ('layout/footer.php'); ?>