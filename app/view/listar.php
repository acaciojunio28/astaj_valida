<?php session_start();?>
<?php require('app/controller/read_controller.php');?>
<?php //require('app/controller/conect.php');?>
<?php require ('layout/heder.php');?>


<div>

<div class="row">
<div class="col-md-1">

    <a class="btn btn-success" href="/astaj_valida/cadastro">Cadastrar</a>
    
</div>
<div class="col-md-1">

    <a class="btn btn-success" href="app/controller/planilha.php" id="relatorio"> Exportar</i></a>

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
    <th>Beneficiário</th>
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

<?php 
$pagina  = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
new read_controller($pagina) ?>

</tbody>
</table>
<div class="row" id="pagina">
<div class="col-md-1">
<?php
if($pagina!=1){
?>
<ul class='pagination'>
<li class='page-item'><a class='page-link 1' href="/astaj_valida/listar?pagina=<?php 
echo $pagina-1;?>">Anterior</a></li></ul>
<?php
}
?>
</div>
 <div class="col-md-1" id="id">
<?php
if($pagina<=$NP){
?>
<ul class='pagination'>
<li class='page-item'><a class='page-link ' href="/astaj_valida/listar?pagina=<?php 
echo $pagina+1;?>">Posterior </a></li></ul>
<?php
}
?>
</div>
</div>
</div>


</div>
<?php include ('layout/footer.php'); ?>