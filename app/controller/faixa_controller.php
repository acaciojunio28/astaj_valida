<?php
require (__DIR__.'/../model/model.php');
class faixa_controller{

    public function update($faixa,$tipo,$valor){
        $editar=new model();
        $editar->update($faixa,$tipo,$valor);
        
        }

    
    }
    $o=new faixa_controller();
    $o->update($_POST['faixa'],$_POST['tipo'],$_POST['valor']);
   echo  "<script> console.log('Registro incluído com sucesso!'); document.location='/astaj_valida/listar';</script>" ;