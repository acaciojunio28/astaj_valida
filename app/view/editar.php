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
        <option selected value="<?php echo $o->pesquisa($id)['tipo_de_plano'];?>"><?php echo $o->pesquisa($id)['tipo_de_plano'];?></option>
        <option value="Afinidade Básico"> Afinidade Basico </option>
        <option value="Afinidade Prático"> Afinidade Pratico</option>
        <option value="Afinidade Versatico"> Afinidade Versatico </option>
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
    <div class="form-group col-md-2">
    <label>Adesão:</label>
    <input type="date" name="adesao" id="senha" class="form-control" value="<?php echo $o->pesquisa($id)['adesao'];?>">
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