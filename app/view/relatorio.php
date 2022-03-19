<?php session_start();?>
<?php require('app/controller/buscar_controller.php');?>
<?php //require('app/controller/conect.php');?>
<?php require ('layout/heder.php');?>


<div id="cadastro">
<form method="POST" action="/astaj_valida/relatorio">
<div class="row mb-3 ">
<div class="col-md-1">
        <input type="text" name="matricula"  class="form-control margin-bottom" placeholder="Matricula">
    </div>
    <div class="col-md-2">
        <input type="text" name="nome"  class="form-control margin-bottom" placeholder="Nome">
    </div>
    <div class="col-md-2">
        <input type="text" name="cpf"  class="form-control margin-bottom" placeholder="CPF" onkeypress="$(this).mask('000.000.000-00');">
    </div>
    <div class="col-md-2 ">
        <select name="tipo" class="form-control">
        <option selected></option>
        <option value="afinidade_basico"> Afinidade Básico </option>
        <option value="afinidade_pratico"> Afinidade Prático</option>
        <option value="afinidade_versatil"> Afinidade Versatil</option>
        <option value="plano_gold"> Plano Gold</option>
        <option value="pleno_platinum"> Pleno Platinum </option>
        <option value="pleno_diamond"> Pleno Diamond</option>
      </select>
</div>
<div class="col-md-1">
        <select name="beneficiario" class="form-control">
            <option selected></option>
            <option value="T">T</option>
            <option value="D">D</option>
            <option value="A">A</option>
        </select>
    </div>
    <div class="col-md-2">
    <input type="date" name="adesao" " class="form-control" >
    </div>
    <div class="col-md-1">
        <input type="text" name="idade"  class="form-control margin-bottom" placeholder="Idade">
    </div>
    <div class="col-md-1">
        <select name="ativo" class="form-control">
            <option selected></option>
            <option value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
        </select>
    </div>
</div>
<div class="row mb-3 ">
<div class="col-md-1">
    <input type="submit" value="Buscar" id="cadastrar"  name="buscar" class="btn btn-success">
</div>
</form>
<div class="col-md-1">
<form method="POST" action="/astaj_valida/app/controller/planilha.php">
<input type="hidden" name="matricula" value="<?php echo $_POST['matricula']; ?>">
<input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
<input type="hidden" name="cpf" value="<?php echo $_POST['cpf']; ?>">
<input type="hidden" name="tipo" value="<?php echo $_POST['tipo']; ?>">
<input type="hidden" name="beneficiario" value="<?php echo $_POST['beneficiario']; ?>">
<input type="hidden" name="idade" value="<?php echo $_POST['idade']; ?>">
<input type="hidden" name="adesao" value="<?php echo $_POST['adesao']; ?>">
<input type="hidden" name="ativo" value="<?php echo $_POST['ativo']; ?>">
<input type="submit" value="Exportar" id="cadastrar"  name="buscar" class="btn btn-success">
</form>
</div>
</div>


<table border="1" class="table table-hover " id="tabela">
<thead>
<tr class="table-dark">
    <th>id</th>
    <th>Matrícula</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Tipo de Plano</th>
    <th>Beneficiário</th>
    <th>Idade</th>
    <th>Adesão</th>
    <th>Desconto</th>
    <th>Total de Desconto</th>
    <th>Data de Nascimento</th>
    <th>faixa etaria</th>
    <th>Situação</th>
    <th>Status</th>
    <th></th>
</tr>
</thead>
<tbody id="myTable">

<?php 

$C=new read_controller() ;

$C->tabela($_POST['matricula'],$_POST['nome'],$_POST['cpf'],$_POST['tipo'],$_POST['beneficiario'],$_POST['idade'],$_POST['adesao'],$_POST['ativo'],$_POST['buscar']);


?>

</tbody>
</table>

</div>

<?php include ('layout/footer.php'); ?>