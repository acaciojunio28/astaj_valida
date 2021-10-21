<?php require ('layout/heder.php');?>
<div>

<form method="POST" action="app/controller/create_controller.php">
<label>Matricula:</label><input type="text" name="matricula" id="senha"><br>
<label>Nome:</label><input type="text" name="nome" id="senha"><br>
<label>CPF:</label><input type="text" name="cpf" id="senha"><br>
<label>Tipo:</label><input type="text" name="tipo" id="senha"><br>,
<label>Beneficiario:</label><input type="text" name="beneficiario" id="senha"><br>
<label>Idade:</label><input type="text" name="idade" id="senha"><br>
<label>Adesão:</label><input type="text" name="adesao" id="senha"><br>
<label>Desconto:</label><input type="text" name="desconto" id="senha"><br>
<label>Total:</label><input type="text" name="total" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"class="btn btn-success">
</form>

</div>
<?php include ('layout/footer.php'); ?>