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
    $nascimento=$_POST['data_nascimento'];
   if(empty($idade)){
      //Data atual
     $dia = date ('d');
     $mes = date ('m');
     $ano = date ('Y');
     
     //Data do aniversário
     $data = explode("-",$nascimento);
     $dianasc = $data[2];
     $mesnasc = $data[1];
     $anonasc = $data[0];
 
     //Calculando sua idade
     $idade = $ano - $anonasc;
     
     if ($mes <  $mesnasc){
 
     $idade--;
     }
     elseif($mes==$mesnasc && $dia<=$dianasc){
 
     $idade--;
 
     }
    }


    $cadastro= new banco();
    $inserir=$cadastro->create($matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$total,$nascimento);
   
   }

}
$c=new create_controller();
$c->transforma();
echo "<script> alert ('Registrado com Sucesso!'); document.location='/www.astajecorretora.com/astaj_valida/listar'</script>";
