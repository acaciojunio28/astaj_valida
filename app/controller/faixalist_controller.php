<?php
require (__DIR__.'/../model/model.php');
class faixalist_controller{
    
public function __construct(){

    $this->tabela();
}
    public function update($faixa,$tipo,$valor){
        $editar=new model();
        $editar->update($faixa,$tipo,$valor);
        
        }
    public function tabela(){
            $editar=new model();
            $C=$editar->read();
        
            foreach ($C as $row) {
            
            echo  "<tr>" ;
            $list=$row ['faixa_etaria'];
    switch ($list) {
        case 1:
            echo "<th class='col-md-1'>até 18 anos</td>" ;;
            break;
        case 2:
            echo "<th class='col-md-1'>de 19 até 23 anos</td>";
            break;
        case 3:
            echo "<th class='col-md-1'>de 24 até 28 anos</td>";
            break;
        case 4:
                echo "<th class='col-md-1'>de 29 até 33 anos</td>";
            break;
        case 5:
                echo "<th class='col-md-1'>de 34 até 38 anos</td>";
            break;
        case 6:
                echo "<th class='col-md-1'>de 39 até 43 anos</td>";
            break;
        case 7:
                echo "<th class='col-md-1'>de 44 até 48 anos</td>";
            break;
        case 8:
                echo "<th class='col-md-1'>de 49 até 53 anos</td>";
            break;
        case 9:
                echo "<th class='col-md-1'>de 54 até 58 anos</td>";
            break; 
        case 10:
                echo "<th class='col-md-1'>mais de 59 anos</td>";
            break; }

            echo  "<th>" . $row ['afinidade_basico']. "</th>" ;
            echo  "<th>" . $row ['plano_gold']. "</th>" ;
            echo  "<th>" . $row ['afinidade_versatil']. "</th>" ;
            echo  "<th>" . $row ['afinidade_pratico']. "</th>" ;
            echo  "<th>" . $row ['pleno_platinum']. "</th>" ;
            echo  "<th>" . $row ['pleno_diamond']. "</th>" ;
            
    }
    }
}