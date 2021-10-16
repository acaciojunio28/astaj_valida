<?php require ('layout/heder.php');?>
<?php require('app/controller/update_controller.php');?>

    <div>

    </form>
    <form method="POST" action="app/controller/update_controller.php">
    <input type="hidden" name="id" value="<?php echo $o->pesquisa($id)['id'];?>">
    <label>Nome:</label><input type="text" name="nome" id="senha" value="<?php echo $o->pesquisa($id)['nome'];?>" ><br>
    <label>Login:</label><input type="text" name="login"value="<?php echo $o->pesquisa($id)['login'];?>" id="login"><br>
    <button type ="submit" name = "editar" value = "editar"  class="btn btn-success"> Editar </button >
    </form>

    </div>

<?php require ('layout/footer.php'); ?>