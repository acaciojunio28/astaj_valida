<?php require('app/controller/conect.php');?>
<?php require('app/controller/updateUser_controller.php');?>
<?php require ('layout/heder.php');?>
<script>
        function valida(){

        if(document.senha.senha.value==""){
         alert("Para alterar a senha é nescessário digitar uma senha válida.");
        document.getElementById("s").focus();
        return false;
        }
        if(document.senha.repsenha.value==""){
         alert("Digite novamente uma senha válida.");
        document.getElementById("s").focus();
        return false;
        }
        if(document.senha.senha.value!= document.senha.repsenha.value){
         alert("As senhas não conferem.");
        document.getElementById("s").focus();
        return false;
        }
        }
</script>
<form  method="POST" action="app/controller/updateUser_controller.php" name="senha" onsubmit="return valida()">
       
        <input type="hidden" name="user" value="<?php echo $_SESSION['user'];?>">
            <div class="col-md-3">
                <label>Nova senha:</label>
            <input type="password" class="form-control mt-2" name="senha" >
             </div >
             <div class="col-md-3">
                <label>Digite novamente:</label>
            <input type="password" class="form-control mt-2" name="repsenha" >
             </div >
             <button type="submit" id="s" class="btn btn-success mt-2" name="alterar">Alterar</button>
        </form>

<?php include ('layout/footer.php'); ?>
