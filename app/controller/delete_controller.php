<?php
require('../model/banco.php');
class delete_controller{

    public function deletar($id,$matricula,$beneficiario){
       return $this->delete($id,$matricula,$beneficiario);
    }
    
    private function delete($id,$matricula,$beneficiario){
     $cadastro= new banco();
     $inserir=$cadastro->delete($id,$matricula,$beneficiario);
    
    }
}
$o=new delete_controller();
$id = filter_input( INPUT_GET , 'id',FILTER_SANITIZE_NUMBER_INT);
$matricula = filter_input( INPUT_GET , 'matricula',FILTER_SANITIZE_NUMBER_INT);
$beneficiario = filter_input( INPUT_GET , 'beneficiario');
$o->deletar($id,$matricula,$beneficiario);
