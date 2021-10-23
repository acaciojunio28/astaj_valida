<?php
require (__DIR__.'/../model/banco.php');
class update_controller{


public function pesquisa($id){
    $editar=new banco();
    $inserir=$editar->pesquisa($id);
    return $inserir;
    
    }
public function update($nome,$login,$id){
    $editar=new banco();
    $editar->update($nome,$login,$id);
    
    }
}
$o=new update_controller();
$id = filter_input ( INPUT_GET ,'id',FILTER_SANITIZE_NUMBER_INT);
$o->pesquisa($id);
if ( isset( $_POST['editar'])) {
    $o-> update ($_POST['nome'] , $_POST[ 'login' ],$_POST['id']);
    echo  "<script> alert ('Registro incluído com sucesso!');</script>" ;
    return header('Location: /astaj_valida/listar');
   
}



