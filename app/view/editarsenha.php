<?php require('app/controller/conect.php');?>
<?php require('app/controller/cessao.php');?>
<?php require('layout/heder.php');?>
<?php require('app/controller/updatesenha_controller.php');?>
<div id="cadastro">

<form method="POST" action="app/controller/updatesenha_controller">
<input type="hidden" name="id" value="<?php echo $o->pesquisa($id)['id'];?>">
<div class="col-md-3">
<label>Nome:</label>
<input type="text" name="nome" id="senha" class="form-control" value="<?php echo $o->pesquisa($id)['nome'];?>">
</div>
<div class="col-md-3">
<label>User:</label>
<input type="text" name="user" id="senha" class="form-control" value="<?php echo $o->pesquisa($id)['user'];?>">
</div>
<div class="col-md-3">
        <label>Acesso:</label>
        <select name="acesso" class="form-control">
        <option selected value="<?php echo $o->pesquisa($id)['acesso'];?>"><?php echo $o->pesquisa($id)['acesso'];?></option>
        <option value="administrador"> Administrador</option>
        <option value="usuario"> Usuário</option>
 </select>
</div>
<div class="mt-2 mb-3">
<input type="submit" value="Editar" id="cadastrar" name="editar"class="btn btn-success">
</div>
</form>
<?php include ('layout/footer.php'); ?>