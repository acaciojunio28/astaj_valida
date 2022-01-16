<?php

require_once ("conection.php");
class banco{

   private $mysql;

   public function __construct(){
       $this->conexao();
      
   }

    private function conexao() {

   $this->mysql=mysqli_connect(BD_SERVIDOR,BD_USUARIO,BD_SENHA,BD_BANCO);

    }
    //public function create($matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$total){
        
    //mysqli_query($this->mysql,"INSERT INTO cadastro (matricula,nome,cpf,'tipo de plano',beneficiário,idade,adesão,desconto,'desconto total') VALUES ('$matricula','$nome','$cpf','$tipo','$baneficiario','$idade','$adesao','$desconto','$total')");
   
   // }
   public function create($matricula,$nome,$cpf,$tipo,$beneficiario,$idade,$adesao,$desconto,$total,$nascimento,$faixa){
        
    mysqli_query($this->mysql,"INSERT INTO astaje_valida_cadastro (matricula,nome,cpf,tipo_de_plano,beneficiario,idade,adesao,desconto,desconto_total,data_nascimento,faixa_etaria) VALUES ('$matricula','$nome','$cpf','$tipo','$beneficiario','$idade','$adesao','$desconto','$total','$nascimento','$faixa')");
   
    }
    public function read(){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM astaje_valida_cadastro where ativo='s'");
        while($row=mysqli_fetch_array($verificar)) {
            $array[]=$row;
        }
        return $array;
    }
    public function read1(){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM astaje_faixa_etaria");
        while($row=mysqli_fetch_array($verificar)) {
            $array[]=$row;
        }
        return $array;
    }
    public function read2($faixa){
    $verificar=mysqli_query($this->mysql,"SELECT * FROM astaje_tipo WHERE faixa_etaria='$faixa'");
    return mysqli_fetch_assoc($verificar);
    }
    public function pesquisa($id){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM astaje_valida_cadastro WHERE id='$id'");
       return mysqli_fetch_assoc($verificar);
            }
    public function update($matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$total,$nascimento,$faixa,$id){
        mysqli_query($this->mysql,"UPDATE astaje_valida_cadastro SET matricula='$matricula',nome='$nome', cpf='$cpf',tipo_de_plano='$tipo',beneficiario='$baneficiario',idade='$idade',adesao='$adesao',desconto='$desconto',desconto_total='$total',data_nascimento='$nascimento',faixa_etaria='$faixa' WHERE id='$id'");
    }
    public function delete($id){
        //mysqli_query($this->mysql,"DELETE FROM astaje_valida_cadastro WHERE id='$id'");
        mysqli_query(
            $this->mysql,"UPDATE astaje_valida_cadastro SET ativo='n' WHERE matricula='$id'"
        );
    }
    public function login($login,$senha){


        $verificar=mysqli_query($this->mysql,"SELECT * FROM astaje_users WHERE user_login = '$login'");
        //while($row=mysqli_fetch_array($verificar)) {
        //    $array[]=$row;
        //}
        $row = mysqli_fetch_array($verificar);
        $senha_hash = $row['user_pass'];
        //return mysqli_num_rows($verificar);

        $wp_hasher = new PasswordHash(8, TRUE);

        $password_hashed = $senha_hash;
        $plain_password = $senha;
        
        if($wp_hasher->CheckPassword($plain_password, $password_hashed)) {
            //echo "YES, Matched";
            return 1;
        }else {
            //echo "No, Wrong Password";
            return 0;
        }
   
    }
}
//$c=new banco();
//$c->create(12332,'junio',123655,'trarar','nnn',25,'nora',12,1253);
//$c->update(123546,'joao',2354,'tata','mmm',15,'nora',12,23);