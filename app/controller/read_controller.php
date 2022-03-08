<?php
require('app/model/banco.php');
require('user_case/desconto.php');

class read_controller{

private $lista;

public function __construct($pagina){

    $this->lista=new banco;
    $this->tabela($pagina);
}
public function tabela($pagina){
    $C=$this->lista->read($pagina);
    $D=$this->lista->read1();

    foreach ($C as $row) {
    
    echo  "<tr>" ;
    echo  "<th class='col-md-1'>" . $row ['id']. "</th>" ;
    echo  "<th>" . $row ['matricula']. "</th>" ;
    echo  "<td>" . $row ['nome']. "</td>" ;
    echo  "<td>" . $row ['cpf']. "</td>" ;
    $list1=$row ['tipo_de_plano'];
    switch ($list1) {
        case 'afinidade_basico':
            echo "<td>Afinidade Básico</td>" ;;
            break;
        case 'afinidade_pratico':
            echo "<td>Afinidade Prático</td>";
            break;
        case 'afinidade_versatil':
            echo "<td>Afinidade Versatil</td>";
            break;
        case 'plano_gold':
                echo "<td> Plano Gold</td>";
            break;
        case 'pleno_platinum':
                echo "<td>Pleno Platinum</td>";
        case 'pleno_diamond':
                 echo "<td>Pleno Diamond</td>";
            break;

    }
    echo  "<td>" . $row ['beneficiario']. "</td>" ;
    echo  "<td>" . $row ['idade']. "</td>" ;
    echo  "<td>" . date('d/m/Y', strtotime($row['adesao'])). "</td>" ;
    echo  "<td>" . $row ['desconto']. "</td>" ;
    // Desconto total apenas para Titular.
    $desconto_total = new DescontoTotal();
    $desconto_total_titular = $desconto_total->desconto_apenas_titular($row['desconto_total'], $row['beneficiario']);
    echo  "<td>" . $desconto_total_titular . "</td>" ;
    echo  "<td>" . date('d/m/Y', strtotime($row['data_nascimento'])). "</td>" ;
    $list=$row ['faixa_etaria'];
    switch ($list) {
        case 1:
            echo "<td>até 18 anos</td>" ;;
            break;
        case 2:
            echo "<td>de 19 até 23 anos</td>";
            break;
        case 3:
            echo "<td>de 24 até 28 anos</td>";
            break;
        case 4:
                echo "<td>de 29 até 33 anos</td>";
            break;
        case 5:
                echo "<td>de 34 até 38 anos</td>";
            break;
        case 6:
                echo "<td>de 39 até 43 anos</td>";
            break;
        case 7:
                echo "<td>de 44 até 48 anos</td>";
            break;
        case 8:
                echo "<td>de 49 até 53 anos</td>";
            break;
        case 9:
                echo "<td>de 54 até 58 anos</td>";
            break; 
        case 10:
                echo "<td>mais de 59 anos</td>";
            break; 

    }
    
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

    //Calculando sua idade.
    $idade = $ano - $anonasc;
    
    if ($mes <  $mesnasc){

    $idade--;
    }
    elseif($mes==$mesnasc && $dia<=$dianasc){

    $idade--;

    }
    //Fim calculo idade.
    
    $idade1 = $ano - $anonasc;

    if (empty($row['faixa_etaria'])){
        echo "<td></td>";
    }    elseif ($row['faixa_etaria']==1 && $idade<=$D[0]["maximo"]) {
    
        if(($idade1>$D[0]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc )){

            echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}

        else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
    }
    
    elseif ($row['faixa_etaria']==2 && $idade>$D[1]["minimo"] && $idade<=$D[1]["maximo"]) {
        if(($idade1>$D[1]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc) ){

            echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}

        else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
        }

        elseif ($row['faixa_etaria']==3 && $idade>$D[2]["minimo"] && $idade<=$D[2]["maximo"]) {
            if(($idade1>$D[2]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc) ){
    
                echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}
    
            else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
        }
            elseif ($row['faixa_etaria']==4 && $idade>$D[3]["minimo"] && $idade<=$D[3]["maximo"]) {
                if(($idade1>$D[3]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc) ){
        
                    echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}
        
                else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
            }
            elseif ($row['faixa_etaria']==5 && $idade>$D[4]["minimo"] && $idade<=$D[4]["maximo"]) {
                    if(($idade1>$D[4]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc) ){
            
                        echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}
            
                    else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
            }
            elseif ($row['faixa_etaria']==6 && $idade>$D[5]["minimo"] && $idade<=$D[5]["maximo"]) {
                    if(($idade1>$D[5]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc) ){
                
                            echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}
                
                     else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
            }
            elseif ($row['faixa_etaria']==7 && $idade>$D[6]["minimo"] && $idade<=$D[6]["maximo"]) {
                    if(($idade1>$D[6]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc) ){
                
                            echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}
                
                    else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
            }
            elseif ($row['faixa_etaria']==8 && $idade>$D[7]["minimo"] && $idade<=$D[7]["maximo"]) {
                     if(($idade1>$D[7]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc) ){
                
                            echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}
                
                    else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
                
            } 
            elseif ($row['faixa_etaria']==9 && $idade>$D[8]["minimo"] && $idade<=$D[8]["maximo"]) {
                if(($idade1>$D[8]["maximo"]) && ($mes == ($mesnasc-1) || $mes == $mesnasc) ){
        
                    echo "<td class='bg-warning'><p class='text-light'>Atenção</p></td>";}
        
                else{echo "<td class='bg-success'><p class='text-light'>OK</p></td>";}
            }
    elseif ($row['faixa_etaria']==10 && $idade>$D[9]["maximo"]) {
        echo "<td class='bg-success'><p class='text-light'>OK</p></td>";
    }else{
        echo "<td class='bg-danger'> <p class='text-light'>Vencido</p> </td>";
    }  

    echo("<td>" . $row['ativo'] . "</td>");
    
    echo "<td><a class = 'btn btn-primary' href = '/astaj_valida/editar?id=". 
$row['id']."'> <i class='fas fa-edit' title='Editar'></i> </a><button class = 'btn btn-warning' " . 
    " onClick='detalhar(" . $row['id'] .
    ")' > 
    <i class='fa fa-eye'title='view'></i></button> <a class='btn btn-danger'href='#'" .
    "onClick='delete_user(" . $row['id'] . "," . $row['matricula'] . ",\"" . $row['beneficiario'] . "\"" . 
    ", \"" . $row['ativo'] . "\"" .
    ")'> <i class='fa fa-archive' title='Inativar'></i> </a></td>";
    echo  "</td>";

    }

}

}
$C=new banco;
$NP=$C->np();
$id = filter_input ( INPUT_GET ,'id',FILTER_SANITIZE_NUMBER_INT);
$C->pesquisa($id);