<?php
require (__DIR__.'/../model/senha_model.php');
class update_controller{


public function pesquisa($id){
    $editar=new senha_model();
    $inserir=$editar->pesquisa($id);
    return $inserir;
    
    }
public function update($nome,$user,$acesso,$id){
    $editar=new senha_model();
    $editar->update($nome,$user,$acesso,$id);
    
    }
}
$o=new update_controller();
$id = filter_input ( INPUT_GET ,'id',FILTER_SANITIZE_NUMBER_INT);
$o->pesquisa($id);
if ( isset( $_POST['editar'])) {
$nome= $_POST['nome'];
$user=$_POST['user'];
$acesso=$_POST['acesso'];
    
$o-> update ( $nome,$user,$acesso,$_POST['id']);
 echo  "<script> console.log('Registro incluído com sucesso!'); document.location='/valida/senha';</script>" ;
    //header('Location: /astaj_valida/listar');
   
}
