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
    echo  "<th>" . $row ['id']. "</th>" ;
    echo  "<td>" . $row ['nome']. "</td>" ;
    echo  "<td>" . $row ['login']. "</td>" ;
    echo "<td><a class = 'btn btn-primary' href = '/mvc/editar?id=". 
    $row['id']."'> Editar </a> <a class='btn btn-danger'href='#'" . "onClick='delete_user(" . $row['id'] . ")'> Excluir </a> </td>";
    echo  "</td>" ;
    }
        
           }


}

?>