<?php

class banco{

   private $mysql;

   public function __construct(){
       $this->conexao();
      
   }

    private function conexao() {

   $this->mysql=mysqli_connect("localhost","root","","astaj602_site");

    }
    //public function create($matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$total){
        
    //mysqli_query($this->mysql,"INSERT INTO cadastro (matricula,nome,cpf,'tipo de plano',beneficiário,idade,adesão,desconto,'desconto total') VALUES ('$matricula','$nome','$cpf','$tipo','$baneficiario','$idade','$adesao','$desconto','$total')");
   
   // }
    public function create($matricula,$nome,$cpf,$tipo,$beneficiario,$idade,$adesao,$desconto,$total){
        
    mysqli_query($this->mysql,"INSERT INTO cadastro (matricula,nome,cpf,tipo_de_plano,beneficiario,idade,adesao,desconto,desconto_total) VALUES ('$matricula','$nome','$cpf','$tipo','$beneficiario','$idade','$adesao','$desconto','$total')");
   
    }
    public function read(){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM cadastro");
        while($row=mysqli_fetch_array($verificar)) {
            $array[]=$row;
        }
        return $array;
    }
    public function pesquisa($id){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM cadastro WHERE id='$id'");
       return mysqli_fetch_assoc($verificar);
            }
    public function update($matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$total,$id){
        mysqli_query($this->mysql,"UPDATE cadastro SET matricula='$matricula',nome='$nome', cpf='$cpf',tipo_de_plano='$tipo',beneficiario='$baneficiario',idade='$idade',adesao='$adesao',desconto='$desconto',desconto_total='$total' WHERE id='$id'");
    }
    public function delete($id){
        mysqli_query($this->mysql,"DELETE FROM cadastro WHERE id='$id'");
    }
    public function login($login,$senha){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM astaje_users WHERE user_login = '$login' AND user_pass = '$senha'");
        return mysqli_num_rows($verificar);
   
    }
   
}
//$c=new banco();
//$c->create(12332,'junio',123655,'trarar','nnn',25,'nora',12,1253);
//$c->update(123546,'joao',2354,'tata','mmm',15,'nora',12,23);