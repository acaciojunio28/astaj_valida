<?php

require_once ("conection.php");
class model{

   private $mysql;

   public function __construct(){
       $this->conexao();
      
   }

    private function conexao() {

   $this->mysql=mysqli_connect(BD_SERVIDOR,BD_USUARIO,BD_SENHA,BD_BANCO);

    } public function read(){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM tipo");
        while($row=mysqli_fetch_array($verificar)) {
            $array[]=$row;
        }
        return $array;
    }

    public function update($faixa,$tipo,$valor){
    mysqli_query($this->mysql,"UPDATE tipo SET $tipo='$valor' WHERE faixa_etaria='$faixa'");
    }
   
}

