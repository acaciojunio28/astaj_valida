<?php
require (__DIR__.'/../model/senha_model.php');
class update_controller{


public function pesquisaUser($user){
    $editar=new senha_model();
    $inserir=$editar->pesquisaUser($user);
    return $inserir;
    }
    public function updateUser($senha,$user){
        $editar=new senha_model();
        $editar->updateUser($senha,$user);
        }
}

$o=new update_controller();
if ( isset( $_POST['alterar'])){

$senha=md5($_POST['senha']);
$o->updateUser($senha,$_POST['user']);
echo  "<script> console.log('Senha altarada com sucesso!'); document.location='/astaj_valida/listar';</script>" ;
}
 