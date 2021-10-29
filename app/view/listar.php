<?php require ('layout/heder.php');?>
<?php require('app/controller/read_controller.php');?>
<?php require('app/controller/conect.php');?>
<?session_start();?>
<div>
<a class="btn btn-success" href="app/controller/planilha.php" id="relatorio"> Gerar Relatório </a>

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
    <th>Situação</th>
    <th></th>
</tr>
</thead>
<tbody>

<?php new read_controller() ?>

</tbody>
</table>
</div>
<?php include ('layout/footer.php'); ?>