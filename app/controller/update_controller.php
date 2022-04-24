<?php
require (__DIR__.'/../model/banco.php');
class update_controller{


public function pesquisa($id){
    $editar=new banco();
    $inserir=$editar->pesquisa($id);
    return $inserir;
    
    }
public function update($matricula,$nome,$cpf,$tipo,$tipo_odonto,$baneficiario,$idade,$adesao,$desconto,$nascimento,$faixa,$telefone,$cep,$rua,$numero,$bairro,$cidade,$estado,$id){
    $editar=new banco();
    $editar->update($matricula,$nome,$cpf,$tipo,$tipo_odonto,$baneficiario,$idade,$adesao,$desconto,$nascimento,$faixa,$telefone,$cep,$rua,$numero,$bairro,$cidade,$estado,$id);
    
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
$tipo_odonto=$_POST['tipo_odonto'];
$baneficiario=$_POST['beneficiario'];
$adesao=$_POST ['adesao'];
$telefone=$_POST['telefone'];
$cep=$_POST['cep'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
//$total=$_POST['total'];
$faixa=$_POST['faixa'];
$lista=new banco();
//$desconto=$lista->read2($_POST['faixa']);
if($_POST['faixa'] == "Escolher" ){
    $faixa_param = 1;
    $tipo_param = $tipo_odonto;
    $desconto=$lista->read2($faixa_param);
    $desconto=$desconto[$tipo_param];
  }elseif($_POST['faixa'] != "Escolher" && $tipo_odonto != "Escolher"){
    $faixa_param = $faixa;
    $desconto=$lista->read2($faixa);
    $desconto_odonto=$lista->read2(1);
    $desconto_tipo = str_replace(",",".",$desconto[$tipo]);
    $desconto_tipo_o = str_replace(",",".",$desconto_odonto[$tipo_odonto]);
    $desconto = $desconto_tipo + $desconto_tipo_o;
    $desconto = str_replace(",",".",$desconto);
  }else{
    $faixa_param = $faixa;
    $tipo_param = $tipo;
    $desconto=$lista->read2($faixa_param);
    $desconto=$desconto[$tipo_param];
  }
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
    
$o-> update( $matricula,$nome,$cpf,$tipo,$tipo_odonto,$baneficiario,$idade,$adesao,$desconto,$nascimento,$faixa,$telefone,$cep,$rua,$numero,$bairro,$cidade,$estado,$_POST['id']);
 echo  "<script> console.log('Registro incluído com sucesso!'); document.location='/valida/listar';</script>" ;
    //header('Location: /astaj_valida/listar');
   
}



