<?php

class banco{

   private $mysql;

   public function __construct(){
       $this->conexao();
      
   }

    private function conexao() {

   $this->mysql=mysqli_connect("localhost","root","","sistemalogin");

    }
    public function create($nome,$login,$senha){
        
    mysqli_query($this->mysql,"INSERT INTO usuarios (nome,login,logim) VALUES ('$nome','$login','$senha')");
    
    }
    public function read(){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM usuarios");
        while($row=mysqli_fetch_array($verificar)) {
            $array[]=$row;
        }
        return $array;
    }
    public function pesquisa($id){
        $verificar=mysqli_query($this->mysql,"SELECT * FROM usuarios WHERE id='$id'");
       return mysqli_fetch_assoc($verificar);
            }
    public function update($nome,$login,$id){
        mysqli_query($this->mysql,"UPDATE usuarios SET nome='$nome', login='$login' WHERE id='$id'");
    }
    public function delete($id){
        mysqli_query($this->mysql,"DELETE FROM usuarios WHERE id='$id'");
    }
    public function login($login,$senha){
    $verificar=mysqli_query($this->mysql,"SELECT * FROM usuarios WHERE login = '$login' AND logim = '$senha'");
    return mysqli_num_rows($verificar);
    }
   
}
