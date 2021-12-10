<?php session_start();?>
<?php require('app/controller/read_controller.php');?>
<?php// require('app/controller/conect.php');?>
<?php require ('layout/heder.php');?>


<div>

<div class="row">
<div class="col-md-2">
<a class="btn btn-success" href="app/controller/planilha.php" id="relatorio"> Gerar Relatório </i></a>
</div>
<div class="col-md-3 mb-2 ">
    <input type="text" class="form-control" id="search" placeholder="Buscar">
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
    <th>Baneficiário</th>
    <th>Idade</th>
    <th>Adesão</th>
    <th>Desconto</th>
    <th>Total de Desconto</th>
    <th>Data de Nascimento</th>
    <th>faixa etaria</th>
    <th>Situação</th>
    <th></th>
</tr>
</thead>
<tbody id="myTable">

<?php new read_controller() ?>

</tbody>
</table>
</div>
<?php include ('layout/footer.php'); ?>