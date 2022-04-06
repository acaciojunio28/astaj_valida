<?php require('layout/heder.php');?>
<?php require('app/controller/cessao.php');?>
<div id="cadastro">

<form method="POST" action="app/controller/createsenha_controller">
<div class="col-md-3">
<label>Nome:</label>
<input type="text" name="nome" id="senha" class="form-control">
</div>
<div class="col-md-3">
<label>User:</label>
<input type="text" name="user" id="senha" class="form-control">
</div>
<div class="col-md-3">
<label>Senha:</label>
<input type="password" class="form-control mt-2" name="senha">
</div >
<div class="col-md-3">
        <label>Acesso:</label>
        <select name="acesso" class="form-control">
        <option selected>Escolher</option>
        <option value="administrador"> Administrador</option>
        <option value="usuario"> Usuário</option>
 </select>
</div>
<div class="mt-2 mb-3">
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"class="btn btn-success">
</div>
</form>
<?php include ('layout/footer.php'); ?>