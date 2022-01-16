<?php
require('../model/banco.php');
$lista=new banco;
$C=$lista->read();
$D=$lista->read1();

// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"Relatório.xls\"" );
header ("Content-Description: PHP Generated Data" );
    echo"<html lang='pt-br'>";
    echo" <meta charset='UTF-8'>";
    echo"<table border='1'>";
    echo"<tr>";
    echo"<th>id</th>";
    echo"<th>Matrícula</th>";
    echo"<th>Nome</th>";
    echo"<th>CPF</th>";
    echo"<th>Tipo de Plano</th>";
    echo"<th>Baneficiário</th>";
    echo"<th>Idade</th>";
    echo"<th>Adesão</th>";
    echo"<th>Desconto</th>";
    echo"<th>Total de Desconto</th>";
    echo"<th>Data de Nascimento</th>";
    echo"<th>faixa etaria</th>";
    echo"<th>Situação</th>";
    echo"</tr>";
    foreach ($C as $row) {
    echo"<tr>";
    echo  "<td>" . $row ['id']. "</td>" ;
    echo  "<td>" . $row ['matricula']. "</td>" ;
    echo  "<td>" . $row ['nome']. "</td>" ;
    echo  "<td>" . $row ['cpf']. "</td>" ;
    echo  "<td>" . $row ['tipo_de_plano']. "</td>" ;
    echo  "<td>" . $row ['beneficiario']. "</td>" ;
    echo  "<td>" . $row ['idade']. "</td>" ;
    echo  "<td>" . date('d/m/Y', strtotime($row['adesao'])). "</td>" ;
    echo  "<td>" . $row ['desconto']. "</td>" ;
    echo  "<td>" . $row ['desconto_total']. "</td>" ;
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

    //Calculando sua idade
    $idade = $ano - $anonasc;
    
    if ($mes <  $mesnasc){

    $idade--;
    }
    elseif($mes==$mesnasc && $dia<=$dianasc){

    $idade--;

    }

    $idade1 = $ano - $anonasc;

    if (empty($row['faixa_etaria'])){
        echo "<td></td>";
    }
    else if ($row['faixa_etaria']==1 && $idade<=$D[0]["maximo"]) {
    
        if(($idade1>$D[0]["maximo"]) && ($mes == ($mesnasc-1) || $mesnasc )){

            echo "<td>Atenção</td>";}

        else{echo "<td>OK</td>";}
    }
    
    elseif ($row['faixa_etaria']==2 && $idade>$D[1]["minimo"] && $idade<=$D[1]["maximo"]) {
        if(($idade1>$D[1]["maximo"]) && ($mes == ($mesnasc-1) ||$mesnasc) ){

            echo "<td>Atenção</td>";}

        else{echo "<td>OK</td>";}
        }

        elseif ($row['faixa_etaria']==3 && $idade>$D[2]["minimo"] && $idade<=$D[2]["maximo"]) {
            if(($idade1>$D[2]["maximo"]) && ($mes == ($mesnasc-1) ||$mesnasc) ){
    
                echo "<td>Atenção</td>";}
    
            else{echo "<td>OK</td>";}
        }
            elseif ($row['faixa_etaria']==4 && $idade>$D[3]["minimo"] && $idade<=$D[3]["maximo"]) {
                if(($idade1>$D[3]["maximo"]) && ($mes == ($mesnasc-1) ||$mesnasc) ){
        
                    echo "<td>Atenção</td>";}
        
                else{echo "<td>OK</td>";}
            }
            elseif ($row['faixa_etaria']==5 && $idade>$D[4]["minimo"] && $idade<=$D[4]["maximo"]) {
                    if(($idade1>$D[4]["maximo"]) && ($mes == ($mesnasc-1) ||$mesnasc) ){
            
                        echo "<td>Atenção</td>";}
            
                    else{echo "<td>OK</td>";}
            }
            elseif ($row['faixa_etaria']==6 && $idade>$D[5]["minimo"] && $idade<=$D[5]["maximo"]) {
                    if(($idade1>$D[5]["maximo"]) && ($mes == ($mesnasc-1) ||$mesnasc) ){
                
                            echo "<td>Atenção</td>";}
                
                     else{echo "<td>OK</td>";}
            }
            elseif ($row['faixa_etaria']==7 && $idade>$D[6]["minimo"] && $idade<=$D[6]["maximo"]) {
                    if(($idade1>$D[6]["maximo"]) && ($mes == ($mesnasc-1) ||$mesnasc) ){
                
                            echo "<td>Atenção</td>";}
                
                    else{echo "<td>OK</td>";}
            }
            elseif ($row['faixa_etaria']==8 && $idade>$D[7]["minimo"] && $idade<=$D[7]["maximo"]) {
                     if(($idade1>$D[7]["maximo"]) && ($mes == ($mesnasc-1) ||$mesnasc) ){
                
                            echo "<td>Atenção</td>";}
                
                    else{echo "<td>OK</td>";}
                
            } 
            elseif ($row['faixa_etaria']==9 && $idade>$D[8]["minimo"] && $idade<=$D[8]["maximo"]) {
                if(($idade1>$D[8]["maximo"]) && ($mes == ($mesnasc-1) ||$mesnasc) ){
        
                    echo "<td>Atenção</td>";}
        
                else{echo "<td>OK</td>";}
            }
    elseif ($row['faixa_etaria']==10 && $idade>$D[9]["maximo"]) {
        echo "<td>OK</td>";
    }else{
        echo "<td> Vencido </td>";
    }
};
    echo"</tr>";
    echo"</table>";
    echo"</html>";