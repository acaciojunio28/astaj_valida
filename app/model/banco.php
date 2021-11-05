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
    public function create($matricula,$nome,$cpf,$tipo,$beneficiario,$idade,$adesao,$desconto,$total,$nascimento){
        
    mysqli_query($this->mysql,"INSERT INTO astaje_valida_cadastro (matricula,nome,cpf,tipo_de_plano,beneficiario,idade,adesao,desconto,desconto_total,data_nascimento) VALUES ('$matricula','$nome','$cpf','$tipo','$beneficiario','$idade','$adesao','$desconto','$total','$nascimento')");
   
    }
    public function read(){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM astaje_valida_cadastro");
        while($row=mysqli_fetch_array($verificar)) {
            $array[]=$row;
        }
        return $array;
    }
    public function pesquisa($id){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM astaje_valida_cadastro WHERE id='$id'");
       return mysqli_fetch_assoc($verificar);
            }
    public function update($matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$total,$nascimento,$id){
        mysqli_query($this->mysql,"UPDATE astaje_valida_cadastro SET matricula='$matricula',nome='$nome', cpf='$cpf',tipo_de_plano='$tipo',beneficiario='$baneficiario',idade='$idade',adesao='$adesao',desconto='$desconto',desconto_total='$total',data_nascimento='$nascimento' WHERE id='$id'");
    }
    public function delete($id){
        mysqli_query($this->mysql,"DELETE FROM astaje_valida_cadastro WHERE id='$id'");
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