<?php require('app/controller/read_controller.php');?>
<?php require('app/controller/conect.php');?>
<?php require ('layout/heder.php');?>


<div>
<div class="row">
<div class="col-md-1">

    <a class="btn btn-success" href="/valida/cadastro">Cadastrar</a>
    
</div>


<div class="col-md-3 mb-2 ">
    <input type="text" class="form-control" id="search" placeholder="Buscar">

</div>
<div  class="col-md-1">
    <input type="checkbox" id="showInativos" name="showInativos" value="Inativo" >
        <label for="showInativos">Inativos</label>
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
    <th>Tipo de Plano Odonto</th>
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
<li class='page-item'><a class='page-link 1' href="/valida/listar?pagina=<?php 
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
<li class='page-item'><a class='page-link ' href="/valida/listar?pagina=<?php 
echo $pagina+1;?>">Posterior </a></li></ul>
<?php
}
?>
</div>
</div>
</div>

<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $C->pesquisa($id)['nome'];?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <p>Matrícula: <?php 
        $dados = $C->pesquisa($id)['matricula'];
        echo($dados);
        if(is_null($dados) || $dados=="" || $dados==" "){
          echo "em branco";
        }else{
          echo "<script>show_modal();</script>";
        };
      ?></p> 
      <div class="row">
      <div class="col-md-5">
      <p>CPF: <?php echo $C->pesquisa($id)['cpf'];?></p>
      </div>
      <div class="col-md-7">
      <p>Tipo de Plano: <?php $list=$C->pesquisa($id)['tipo_de_plano'];
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
        case 'plano_gold':
                echo "<td>Plano Gold</td>";
            break;
        case 'pleno_platinum':
                echo "<td>Pleno Platinum</td>";
          case 'pleno_diamond':
           echo "<td>Pleno Diamond</td>";
            break;
            }?></p>
      </div>
      </div>
      <div class="row">
      <div class="col-md-5">
      <p>Beneficiario: <?php echo $C->pesquisa($id)['beneficiario'];?></p>
      </div>
      <div class="col-md-6">
      <p>Adesão: <?php echo date('d/m/Y', strtotime($C->pesquisa($id)['adesao']));?></p> 
      </div>
        </div>
        <div class="row">
      <div class="col-md-5">
      <p>Status: <?php echo $C->pesquisa($id)['ativo'];?></p>
      </div>
      <div class="col-md-6">
      <p>Nascimento: <?php echo date('d/m/Y', strtotime($C->pesquisa($id)['data_nascimento']));?></p> 
      </div>
        </div>
        <div class="row">
      <div class="col-md-5">
      <p>Telefone: <?php echo $C->pesquisa($id)['telefone'];?></p>
      </div>
      <div class="col-md-6">
      <p>Cep: <?php echo $C->pesquisa($id)['cep'];?></p> 
      </div>
        </div>
        <div class="row">
      <div class="col-md-5">
      <p>Rua: <?php echo $C->pesquisa($id)['rua'];?></p>
      </div>
      <div class="col-md-6">
      <p>Numero: <?php echo $C->pesquisa($id)['numero'];?></p> 
      </div>
        </div>
        <div class="row">
      <div class="col-md-5">
      <p>Bairro: <?php echo $C->pesquisa($id)['bairro'];?></p>
      </div>
      <div class="col-md-7">
      <p>Cidade: <?php echo $C->pesquisa($id)['cidade'];?>-<?php echo $C->pesquisa($id)['estado'];?></p>
      </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
<script>
</script>

<?php include ('layout/footer.php'); ?>