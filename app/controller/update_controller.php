<?php
require (__DIR__.'/../model/banco.php');
class update_controller{


public function pesquisa($id){
    $editar=new banco();
    $inserir=$editar->pesquisa($id);
    return $inserir;
    
    }
public function update($matricula,$nome,$cpf,$tipo,$beneficiario,$idade,$adesao,$desconto,$total,$id){
    $editar=new banco();
    $editar->update($matricula,$nome,$cpf,$tipo,$idade,$beneficiario,$adesao,$desconto,$total,$id);
    
    }
}
$o=new update_controller();
$id = filter_input ( INPUT_GET ,'id',FILTER_SANITIZE_NUMBER_INT);
$o->pesquisa($id);
if ( isset( $_POST['editar'])) {
    $o-> update ( $_POST['matricula'],$_POST['nome'],$_POST['cpf'],$_POST['tipo'],$_POST['beneficiario'],$_POST['idade'],$_POST ['adesao'],$_POST['desconto'],$_POST['total'],$_POST['id']);
    echo  "<script> alert ('Registro incluído com sucesso!');</script>" ;
    return header('Location: /astaj_valida/listar');
   
}



