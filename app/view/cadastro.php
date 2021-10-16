<?php require ('layout/heder.php');?>
<div>

<form method="POST" action="app/controller/create_controller.php">
<label>Nome:</label><input type="text" name="nome" id="senha"><br>
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"class="btn btn-success">
</form>

</div>
<?php include ('layout/footer.php'); ?>