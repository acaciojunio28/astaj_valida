
<?php
require('../model/senha_model.php');

class create_controller{

   
   public function incluir($nome,$user,$senha,$acesso){

    $cadastro= new senha_model;
    $cadastro->create($nome,$user,$senha,$acesso);

   }

}
$c=new create_controller;
$c->incluir($_POST['nome'],$_POST['user'],md5($_POST['senha']),$_POST['acesso']);
echo "<script> alert ('Registrado com Sucesso!'); document.location='/valida/senha'</script>";