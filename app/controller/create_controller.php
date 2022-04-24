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
    $tipo_odonto=$_POST['tipo_odonto'];
    $telefone=$_POST['telefone'];
    $cep=$_POST['cep'];
    $rua=$_POST['rua'];
    $numero=$_POST['numero'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $baneficiario=$_POST['beneficiario'];
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

    //$idade=$_POST['idade'];
    $adesao=$_POST['adesao'];
   // $total=$_POST['total'];
    $faixa=$_POST['faixa'];
    $lista=new banco;
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

    //$total1=$total[0]['afinidade_basico'];
    $faixa=$_POST['faixa'];
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
    $inserir=$cadastro->create($matricula,$nome,$cpf,$tipo,$tipo_odonto,$baneficiario,$idade,$adesao,$desconto,$nascimento,$faixa,$telefone,$cep,$rua,$numero,$bairro,$cidade,$estado
   );
   
   }

}
$c=new create_controller();
$c->transforma();
echo "<script> alert ('Registrado com Sucesso!'); document.location='/valida/listar'</script>";