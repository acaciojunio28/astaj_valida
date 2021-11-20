<?php
require('app/model/banco.php');

class read_controller{

private $lista;

public function __construct(){

    $this->lista=new banco;
    $this->tabela();
}
public function tabela(){
    $C=$this->lista->read();
    foreach ($C as $row) {
    
    echo  "<tr>" ;
    echo  "<th class='col-md-1'>" . $row ['id']. "</th>" ;
    echo  "<th>" . $row ['matricula']. "</th>" ;
    echo  "<td>" . $row ['nome']. "</td>" ;
    echo  "<td>" . $row ['cpf']. "</td>" ;
    echo  "<td>" . $row ['tipo_de_plano']. "</td>" ;
    echo  "<td>" . $row ['beneficiario']. "</td>" ;
    echo  "<td>" . $row ['idade']. "</td>" ;
    echo  "<td>" . date('d/m/Y', strtotime($row['adesao'])). "</td>" ;
    echo  "<td>" . $row ['desconto']. "</td>" ;
    echo  "<td>" . $row ['desconto_total']. "</td>" ;
    echo  "<td>" . date('d/m/Y', strtotime($row['data_nascimento'])). "</td>" ;
     //Data atual
    $dia = date ('d');
    $mes = date ('m');
    $ano = date ('Y');
    //Data do aniversário
    //$data = explode("/",$row['data_nascimento']);
    //$dianasc = $data[0];
    //$mesnasc = $data[1];
    //$anonasc = $data[2];

    //Data do aniversário
    $data = explode("-",$row['data_nascimento']);
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

    /**logica para calcular situação */
    //$idade = 16
    //$faixa_etaria = 1;
    //conecta banco e recupera faixa min e max
//$faixa_min = 0
   // $faixa_max =  15

    //if($idade > $faixa_min && $idade < ($faixa_max - 1mes){
        //$situacao = "OK";
//}elseif($idade > ($faixa_max - 1mes) && $idade < $faixa_max){
    //    $situacao = "anteção";
    //}else{
       // $situacao = "vencido";

   // }
    /**logica para calcular situação */

    if ($idade <= 20) {
        echo "<td>igual ou menor que 20</td>";
    } elseif ($idade > 20 && $idade<=30) {
        echo "<td> maior que 20 </td>";
    } elseif ($idade > 30) {
        echo "<td> maior que 30 </td>";
    }

    echo "<td><a class = 'btn btn-primary' href = '/astaj_valida/editar?id=". 
    $row['id']."'> <i class='fas fa-edit'></i> </a> <a class='btn btn-danger'href='#'" . "onClick='delete_user(" . $row['id'] . ")'>  <i class='fas fa-trash-alt'></i> </a></td>";
    echo  "</td>" ;
    }
        
           }


}
   