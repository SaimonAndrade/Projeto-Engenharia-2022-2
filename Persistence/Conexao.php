<?php
class Conexao{
    private $server_name= "localhost";
    private $user_name = "root";
    private $password = "123";
    private $bd = "banhoetosafacil";
    private $conexao = null;

    function __construct(){}

    function pegarconexao(){

        if($this -> conexao == null){
            $this -> conexao = mysqli_connect($this->server_name, $this->user_name, $this->password, $this->bd);
        }

        if( !$this->conexao -> connect_error){
            die("falha na conexão:". $this->conexao -> connect_error);
        }
    }
};
?>