<?php
require('app/model/senha_model.php');


class read_controller{

private $lista;

public function __construct(){

    $this->lista=new senha_model;
    $this->tabela();
}
public function tabela(){
    $C=$this->lista->read();;

    foreach ($C as $row) {
    
    echo  "<tr>" ;
    echo  "<th class='col-md-1'>" . $row ['nome']. "</th>" ;
    echo  "<th>" . $row ['user']. "</th>" ;
    echo  "<td>" . $row ['acesso']. "</td>" ;
      
    echo "<td><a class = 'btn btn-primary' href = '/valida/editarsenha?id=". 
$row['id']."'> <i class='fas fa-edit' title='Editar'></i> </a>
<a class = 'btn btn-danger' href = '/valida/app/controller/deletesenha_controller.php?id=". 
$row['id']."'> <i class='fas fa-trash-alt'></i> </a>";
    echo  "</td>";

    }

}

}
