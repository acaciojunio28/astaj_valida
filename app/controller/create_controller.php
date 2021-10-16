<?php
require('../model/banco.php');

class create_controller{

   public function transforma(){
      return $this->incluir();
   }
   
   private function incluir(){
    
    $nome= $_POST ['nome'];
    $login=$_POST ['login'];
    $senha=$_POST ['senha'];

    $cadastro= new banco();
    $inserir=$cadastro->create($nome,$login,$senha);
   
   }

}
$c=new create_controller();
$c->transforma();
echo "<script> alert ('Registrado com Sucesso!'); document.location='/mvc/cadastro'</script>";
