<?php

require_once ("conection.php");
class buscar_model{

   private $mysql;

   public function __construct(){
       $this->conexao();
      
   }

    private function conexao() {

   $this->mysql=mysqli_connect(BD_SERVIDOR,BD_USUARIO,BD_SENHA,BD_BANCO);

    }

    public function buscar($matricula,$nome,$cpf,$tipo,$odonto,$beneficiario,$idade,$adesao,$ativo){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM valida_cadastro WHERE matricula LIKE '$matricula%' AND nome LIKE '$nome%' AND cpf LIKE '$cpf%'AND tipo_de_plano LIKE '$tipo%'AND tipo_de_plano_odonto LIKE '$odonto%' AND beneficiario LIKE '$beneficiario%' AND idade LIKE '$idade%' AND adesao LIKE '$adesao%' AND ativo LIKE '$ativo%'");
        while($row=mysqli_fetch_array($verificar)) {
            $array[]=$row;
        }
        return $array;
    }
}