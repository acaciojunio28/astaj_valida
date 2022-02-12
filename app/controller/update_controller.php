<?php
require (__DIR__.'/../model/banco.php');
class update_controller{


public function pesquisa($id){
    $editar=new banco();
    $inserir=$editar->pesquisa($id);
    return $inserir;
    
    }
public function update($matricula,$nome,$cpf,$tipo,$beneficiario,$idade,$adesao,$desconto,$total,$nascimento,$faixa,$id){
    $editar=new banco();
    $editar->update($matricula,$nome,$cpf,$tipo,$beneficiario,$idade,$adesao,$desconto,$total,$nascimento,$faixa,$id);
    
    }
}
$o=new update_controller();
$id = filter_input ( INPUT_GET ,'id',FILTER_SANITIZE_NUMBER_INT);
$o->pesquisa($id);
if ( isset( $_POST['editar'])) {
$matricula= $_POST['matricula'];
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$tipo=$_POST['tipo'];
$baneficiario=$_POST['beneficiario'];
$adesao=$_POST ['adesao'];
$total=$_POST['total'];
$faixa=$_POST['faixa'];
$lista=new banco();
$desconto=$lista->read2($_POST['faixa']);
$nascimento=$_POST['data_nascimento'];

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
    
$o-> update ( $matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$total[$tipo],$nascimento,$faixa,$_POST['id']);
 echo  "<script> console.log('Registro incluído com sucesso!'); document.location='/astaj_valida/listar';</script>" ;
    //header('Location: /astaj_valida/listar');
   
}



