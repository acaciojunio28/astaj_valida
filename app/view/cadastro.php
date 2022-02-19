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
        <option value="afinidade_dinamico"> Afinidade Dinâmico</option>
        <option value="afinidade_lider"> Afinidade Lider </option>
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
        <!--<div class="col-md-2">
            <label>Idade:</label>
            <input type="text" minlength="0" maxlength="3" name="idade" id="senha" class="form-control" onkeypress="$(this).mask('#00');">
        </div>-->
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
            <label>Desconto:</label>
            <input type="text" name="desconto" id="senha" class="form-control"  onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});">
        </div>
        <div class="col-md-2">
            <label>Total:</label>
            <input type="text" name="total" id="senha" class="form-control"  onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});">
        </div>
    </div>
    <div class="mt-2 mb-3">
    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"class="btn btn-success">
    </div>
</form>

</div>
<?php include ('layout/footer.php'); ?>