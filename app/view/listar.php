<?php require ('layout/heder.php');?>
<?php require('app/controller/read_controller.php');?>
<div>
<a class="btn btn-success" href="app/controller/planilha.php" id="relatorio"> Gerar Relatório </a>

<table border="1" class="table table-hover" id="tabela">
<thead>
<tr class="table-dark">
    <th>id</th>
    <th>nome</th>
    <th>login</th>
    <th></th>
</tr>
</thead>
<tbody>

<?php new read_controller() ?>

</tbody>
</table>
</div>
<?php include ('layout/footer.php'); ?>