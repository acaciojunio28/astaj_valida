<?php

require_once ("conection.php");
class model{

   private $mysql;

   public function __construct(){
       $this->conexao();
      
   }

    private function conexao() {

   $this->mysql=mysqli_connect(BD_SERVIDOR,BD_USUARIO,BD_SENHA,BD_BANCO);

    }

    public function update($faixa,$tipo,$valor){
    mysqli_query($this->mysql,"UPDATE astaje_tipo SET $tipo='$valor' WHERE faixa_etaria='$faixa'");
    }
   
}

