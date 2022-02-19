<?php require('layout/heder.php');?>
<div id="cadastro">
<form method="POST" action="app/controller/faixa_controller.php">
<div class="row">
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
    <div class="col-md-2">
        <label>Valor:</label>
        <input type="text" name="valor" id="senha" class="form-control"value="">
    </div>
</div>
<div class="mt-2 mb-3">
    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"class="btn btn-success">
 </div>
 </div>
 

</form>
<?php require ('layout/footer.php'); ?>