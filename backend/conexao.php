<?php

class Conexao{

    private $hostname = "localhost";
    private $login = "login";
    private $pw = "password";
    private $db = "db";
    
    function conectaDB(){

        $conecta = new mysqli($this->hostname,$this->login,$this->pw,$this->db);
        

        if($conecta == false){
            echo "Erro na conexão com o db ";
        }

        return $conecta;


    }

    function selecionaDB($db) {
        $this->conectaDB()->select_db($db);
    }



}

?>
