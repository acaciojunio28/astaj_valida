<?php
require('../model/banco.php');
class delete_controller{

    public function deletar($id){
       return $this->delete($id);
    }
    
    private function delete($id){
     $cadastro= new banco();
     $inserir=$cadastro->delete($id);
    
    }
}
$o=new delete_controller();
$id = filter_input ( INPUT_GET , 'id',FILTER_SANITIZE_NUMBER_INT);
$o->deletar($id);
