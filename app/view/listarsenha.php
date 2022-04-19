<?php require('app/controller/cessao.php');?>
<?php require ('layout/heder.php');?>
<?php require('app/controller/readsenha_controller.php');?>
<div class="row mb-3 ">
<div class="col-md-1">

    <a class="btn btn-success" href="/astaj_valida/cadastrosenha">Cadastrar</a>
    
</div>
</div>

<table border="1" class="table table-hover " id="tabela">
<thead>
<tr class="table-dark">
    <th>Nome</th>
    <th>User</th>
    <th>Acesso</th>
    <th></th>
</tr>
</thead>
<tbody id="myTable">

<?php 

new read_controller() ?>

</tbody>
</table>
<?php include ('layout/footer.php'); ?>