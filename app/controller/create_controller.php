<?php
require('../model/banco.php');

class create_controller{

   public function transforma(){
      return $this->incluir();
   }
   
   private function incluir(){
    
    $matricula= $_POST['matricula'];
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $tipo=$_POST['tipo'];
    $baneficiario=$_POST['beneficiario'];
    $idade=$_POST['idade'];
    $adesao=$_POST ['adesao'];
    $desconto=$_POST['desconto'];
    $total=$_POST['total'];


    $cadastro= new banco();
    $inserir=$cadastro->create($matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$total);
   
   }

}
$c=new create_controller();
$c->transforma();
echo "<script> alert ('Registrado com Sucesso!'); document.location='/astaj_valida/cadastro'</script>";
