<?php
require('../model/senha_model.php');
class delete_controller{

    
    
    public function delete($id){
     $cadastro= new senha_model();
     $inserir=$cadastro->delete($id);
    
    }

   
}
$o=new delete_controller();
$id = filter_input( INPUT_GET ,'id',FILTER_SANITIZE_NUMBER_INT);
$o->delete($id);
echo  "<script> document.location='/valida/senha';</script>" ;