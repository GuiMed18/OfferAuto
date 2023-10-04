<?php

include_once('../backend/conexao.php');

$conecta = new Conexao;
$conn = $conecta->conectaDB();

$tabelas = array("gerencial_web","gerencial_web_srt","gerencial_web_temp","log_ger_web","usuarios_ger_web");

foreach($tabelas as $tb){
    $sql = "SHOW TABLES LIKE '$tb'";
    $query = mysqli_query($conn,$sql);
    $linha = mysqli_num_rows($query);
 
    if($linha === 1){
        $tb_existe = true;
        
    }else{
        continue;
    }

}



if(isset($tb_existe) && $tb_existe == true){
    header("Location: ../func/tela_informativo.php"); 
 
}else{


$conecta->selecionaDB('teste');

$sqlFile = '../backend/tabelas.sql';
$sqlCommands = file_get_contents($sqlFile);

if ($conn->multi_query($sqlCommands)) {
    $_GET['criatb'] = "success";
} else {
    $_GET['criatb'] = "err";
    $_GET['erro'] = $conn->error;
}


}
$conn->close();


?>