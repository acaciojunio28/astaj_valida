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
    $adesao=$_POST ['adesao'];
   // $total=$_POST['total'];
    $faixa=$_POST['faixa'];
    $lista=new banco;
    $desconto=$lista->read2($_POST['faixa']);
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
    $inserir=$cadastro->create($matricula,$nome,$cpf,$tipo,$tipo_odonto,$baneficiario,$idade,$adesao,$desconto[$tipo],$nascimento,$faixa,$telefone,$cep,$rua,$numero,$bairro,$cidade,$estado
   );
   
   }

}
$c=new create_controller();
$c->transforma();
echo "<script> alert ('Registrado com Sucesso!'); document.location='/astaj_valida/listar'</script>";