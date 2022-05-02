<?php require('app/controller/cessao.php');?>
<?php require('layout/heder.php');?>
<div id="cadastro">

<script>
        function valida(){

        if(document.cadastro.nome.value==""){
         alert("E nescessário digitar um nome válido.");
        document.getElementById("cadastrar").focus();
        return false;
                }
        if(document.cadastro.user.value==""){
         alert("E nescessário digitar um usuário válido.");
        document.getElementById("cadastrar").focus();
        return false;
                }
        if(document.cadastro.senha.value==""){
         alert("E nescessário digitar uma senha válido.");
        document.getElementById("cadastrar").focus();
        return false;
                }
        if(document.cadastro.acesso.value=="Escolher"){
         alert("E nescessário escolher um acesso.");
        document.getElementById("cadastrar").focus();
        return false;
                }
        }
</script>

<form method="POST" action="app/controller/createsenha_controller.php" name="cadastro" onsubmit="return valida()">
<div class="col-md-3">
<label>Nome:</label>
<input type="text" name="nome"  class="form-control">
</div>
<div class="col-md-3">
<label>User:</label>
<input type="text" name="user"  class="form-control">
</div>
<div class="col-md-3">
<label>Senha:</label>
<input type="password" name="senha" class="form-control mt-2">
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