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
   public function create($matricula,$nome,$cpf,$tipo,$tipo_odonto,$beneficiario,$idade,$adesao,$desconto,$nascimento,$faixa,$telefone,$cep,$rua,$numero,$bairro,$cidade,$estado){
        
    mysqli_query($this->mysql,"INSERT INTO astaje_valida_cadastro (matricula,nome,cpf,tipo_de_plano,tipo_de_plano_odonto,
        beneficiario,idade,adesao,desconto,data_nascimento,faixa_etaria,telefone,cep,rua,numero,bairro,cidade,estado) VALUES (
        '$matricula','$nome','$cpf','$tipo','$tipo_odonto','$beneficiario','$idade','$adesao','$desconto','$nascimento','$faixa','$telefone','$cep','$rua','$numero','$bairro','$cidade','$estado')");
   
    } 
    public function np(){
        $quantidade = 10;
        $tr = mysqli_num_rows(mysqli_query($this->mysql,"SELECT * FROM astaje_valida_cadastro "));
        $tp=$tr/$quantidade;
        return $tp;
    }
    public function read($pagina){
        $quantidade = 10;
        //Calcula a pagina de qual valor será exibido
        $inicio = ($quantidade * $pagina) - $quantidade;
        $verificar=mysqli_query($this->mysql,"SELECT *, 
            replace( (select sum(replace(desconto, \",\", \".\")) 
            from astaje_valida_cadastro t2 where t2.matricula = t1.matricula and t2.ativo='Ativo'), \".\", \",\") as desconto_total 
            FROM astaje_valida_cadastro t1 LIMIT $inicio, $quantidade");

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
    public function update($matricula,$nome,$cpf,$tipo,$baneficiario,$idade,$adesao,$desconto,$nascimento,$faixa,$telefone,$cep,$rua,$numero,$bairro,$cidade,$estado,$id){
        mysqli_query($this->mysql,"UPDATE astaje_valida_cadastro SET matricula='$matricula',nome='$nome', cpf='$cpf',tipo_de_plano='$tipo',beneficiario='$baneficiario',idade='$idade',adesao='$adesao',desconto='$desconto',data_nascimento='$nascimento',faixa_etaria='$faixa',telefone='$telefone',cep='$cep',rua='$rua',numero='$numero',bairro='$bairro',cidade='$cidade',estado='$estado' WHERE id='$id'");
    }
    public function delete($id,$matricula,$beneficiario){
        //mysqli_query($this->mysql,"DELETE FROM astaje_valida_cadastro WHERE id='$id'");
        if ($beneficiario == "T"){
            mysqli_query(
                $this->mysql,"UPDATE astaje_valida_cadastro SET ativo='Inativo' WHERE matricula='$matricula'"
            );
        }else{
            mysqli_query(
                $this->mysql,"UPDATE astaje_valida_cadastro SET ativo='Inativo' WHERE id='$id'"
            );
        }
    }
    public function ativar_db($id){
        mysqli_query(
            $this->mysql,"UPDATE astaje_valida_cadastro SET ativo='Ativo' WHERE id='$id'"
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
$c=new banco();
//$c->create(12332,'junio',123655,'trarar','nnn',25,'nora',12,1253);
//$c->update(123,"joao",123456,"bonus","T",36,1566666,15222,15-05-96,"vvvv",33333,6666,"ssul",15,"nobre","ba","df",107);