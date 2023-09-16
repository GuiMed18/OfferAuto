<?php

class Conexao{

    private $hostname = "localhost";
    private $login = "filial140";
    private $pw = "senhafilial";
    private $db = "atc_portal";
    
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
