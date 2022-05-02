<?php

require_once ("conection.php");
class senha_model{

   private $mysql;

   public function __construct(){
       $this->conexao();
      
   }
   
   private function conexao() {

    $this->mysql=mysqli_connect(BD_SERVIDOR,BD_USUARIO,BD_SENHA,BD_BANCO);
 
     }
   public function create($nome,$user,$senha,$acesso){
        
    mysqli_query($this->mysql,"INSERT INTO user (nome,user,senha,acesso) VALUES ('$nome','$user','$senha','$acesso')");
   
    } 
    public function read(){
        
        $verificar=mysqli_query($this->mysql,"SELECT *
            FROM user");

        while($row=mysqli_fetch_array($verificar)) {
            $array[]=$row;
        }
        return $array;
    }
    public function pesquisa($id){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM user WHERE id='$id'");
       return mysqli_fetch_assoc($verificar);
            }
    public function update($nome,$user,$acesso,$id){
        mysqli_query($this->mysql,"UPDATE user SET nome='$nome', user='$user',acesso='$acesso' WHERE id='$id'");
    }
    public function delete($id){
        mysqli_query($this->mysql,"DELETE FROM user WHERE id='$id'");
    }
    public function pesquisaUser($user){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM user WHERE acesso='$user'");
       return mysqli_fetch_assoc($verificar);
            }
    public function updateUser($senha,$user){
         mysqli_query($this->mysql,"UPDATE user SET senha='$senha' WHERE user='$user'");
            }

}
