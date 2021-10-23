<?php require ('layout/heder.php');?>
<div>

<form method="POST" action="app/controller/create_controller.php">
    <div class="form-group col-md-1">
        <label>Matricula:</label>
        <input type="text" name="matricula" id="senha"class="form-control">
    </div>
    <div class="row">
    <div class="col-md-3">
        <label>Nome:</label>
        <input type="text" name="nome" id="senha" class="form-control">
    </div>
    <div class="col-md-3">
        <label>CPF:</label>
        <input type="text" name="cpf" id="senha" class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label>Tipo:</label>
        <select name="tipo" class="form-control">
        <option selected>Escolher</option>
        <option value="Afinidade Básico"> Afinidade Basico </option>
        <option value="Afinidade Prático"> Afinidade Pratico</option>
        <option value="Afinidade Versatico"> Afinidade Versatico </option>
      </select>
    </div>
    <div class="col-md-2">
    <label>Beneficiario:</label>
        <select name="beneficiario" class="form-control">
            <option selected>Escolher</option>
            <option value="Titular">Titular</option>
            <option value="Dependente">Dependente</option>
        </select>
    </div>
        <div class="col-md-2">
            <label>Idade:</label>
            <input type="text" name="idade" id="senha" class="form-control">
        </div>
    </div>
    <div class="form-group col-md-2">
    <label>Adesão:</label>
    <input type="date" name="adesao" id="senha" class="form-control">
    </div>
    <div class="row">
        <div class="col-md-2">
            <label>Desconto:</label>
            <input type="text" name="desconto" id="senha" class="form-control">
        </div>
        <div class="col-md-2">
            <label>Total:</label>
            <input type="text" name="total" id="senha" class="form-control">
        </div>
    </div>
    <div class="mt-2 mb-3">
    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"class="btn btn-success">
    </div>
</form>

</div>
<?php include ('layout/footer.php'); ?>