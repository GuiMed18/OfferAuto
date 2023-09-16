<?php
class VerificaAtt{

function __construct()
{
include('conexao.php');

$conexao = new Conexao;
$conecta = $conexao->conectaDB();

$sql = "SELECT * FROM log_pl WHERE n = '12' ORDER BY id desc limit 1";
$query = mysqli_query($conecta,$sql);
$fetch = mysqli_fetch_array($query);
$data = $fetch['data'];
$horario = $fetch['hora'];

echo date('d/m/Y',strtotime($data))." às ". substr($horario,0,5);
}
}

?>