
<?php
date_default_timezone_set("America/Sao_Paulo");
session_start();


include_once('conexao.php');
$conexao = new Conexao;
$conecta = $conexao->conectaDB();

if(isset($_GET['log'])){
    $tipo_log = $_GET['log'];
    $usuario = $_SESSION['usuarioEmail'];
    $data = date('d/m/Y H:i');
    $ip_maquina = $_SERVER['REMOTE_ADDR'];

    if($usuario != "guilhe266828"){
    $sql = "INSERT INTO logs_ger_web (usuario,data,acao,ip_maquina) VALUES ('$usuario','$data','$tipo_log','$ip_maquina')";
    $insere_log = mysqli_query($conecta,$sql);
    }
    
}

if (isset($_GET["produto"])) {

    $produto = $_GET["produto"]; 
    

    $sql = "SELECT * FROM gerencial_web where merc = '$produto'";
    $query = mysqli_query($conecta,$sql);
    $fetch = mysqli_fetch_array($query);
    $descricao = $fetch['descricao'];
    $preco_venda = $fetch['preco_venda'];
    $emb = $fetch['embalagem'];
    $emb = str_ireplace(' ','-',$emb);
    $emb = substr($emb,13,8);
    $emb = explode('-',$emb);


    foreach($emb as $embal){
        if(strrpos($embal,"KG") || strrpos($embal,"X") || strrpos($embal,"") || strrpos($embal,",") || strrpos($embal,"BDJ") || strrpos($embal,"PCT") || strrpos($embal,"UND") || strrpos($embal,"ML") || strrpos($embal,"G") || strrpos($embal,"KIT") || strrpos($embal,"L")){
        $embalagem = $embal;
        }else{
        $qtd_caixa = $embal;
        }
    }


    if($embalagem != "1G"){
        $categoria = "<h7 style='font-size:13px'>Emb. Unidade</h7>";
    }else{
        $embalagem = "";
        $categoria = "<h7 style='font-size:13px'>Kg na Peça</h7>";
    }  
  

    if($categoria == "<h7 style='font-size:13px'>Kg na Peça</h7>"){

    $valor_unit = $preco_venda;  
    
    }else{    
   
    $valor_unit = ($preco_venda/$qtd_caixa);   
   
    }
   
   if(isset($_GET['desconto'])){
       

    $desconto = $_GET['desconto'];  
    $porcentagem = $valor_unit * (1 - $desconto / 100);
    $porcentagem = 'R$ '.number_format($porcentagem,3,',','');
    $porcentagem = substr($porcentagem,0,-1); //Desculpa, isso é uma gambiarra pra que o número não fique arredondado
}

    $valor_unit = number_format($valor_unit,2,',','.');
    

   if($categoria == "<h7 style='font-size:13px'>Kg na Peça</h7>"){

    $dados = array(
        'descricao' => $descricao,
        'preco' => "R$ ".$valor_unit."<h7 style='font-size:13px;color:black'> Kg</h7>",
        'desconto' => $porcentagem,
        'embalagem' => $embalagem,
        'categoria' => $categoria
       
    );


   }else{

    $dados = array(
        'descricao' => $descricao,
        'preco' => "R$ ".$valor_unit,
        'desconto' => $porcentagem,
        'embalagem' => $embalagem,
        'categoria' => $categoria
       
    );


   }
        
   
    
    
    
    header('Content-Type: application/json');
    echo json_encode($dados);
} 


if (isset($_GET["produto_x2_1"])) {

    $produto = $_GET["produto_x2_1"];
  

    $sql = "SELECT * FROM gerencial_web where merc = '$produto'";
    $query = mysqli_query($conecta,$sql);
    $fetch = mysqli_fetch_array($query);
    $descricao = $fetch['descricao'];

    $emb = $fetch['embalagem'];
    $emb = str_ireplace(' ','-',$emb);
    $emb = substr($emb,13,8);
    $emb = explode('-',$emb);

    foreach($emb as $embal){
        if(strrpos($embal,"KG") || strrpos($embal,"X") || strrpos($embal,",") || strrpos($embal,"") || strrpos($embal,"BDJ") || strrpos($embal,"PCT") || strrpos($embal,"UND") || strrpos($embal,"ML") || strrpos($embal,"G") || strrpos($embal,"KIT") || strrpos($embal,"L")){
        $embalagem = $embal;
        }else{
        $qtd_caixa = $embal;
        }
    }

    if($embalagem != "1G"){
        $categoria = "<h7 style='font-size:13px'>Emb. Unidade</h7>";
    }else{
        $embalagem = "";
        $categoria = "<h7 style='font-size:13px'>Kg na Peça</h7>";
    }

    $preco_venda = $fetch['preco_venda'];

    if($categoria == "<h7 style='font-size:13px'>Kg na Peça</h7>"){
        $valor_unit = $preco_venda;
        $valor_unit = number_format($valor_unit,2,',','.');
        $valor_unit = $valor_unit."<h7 style='font-size: 15px;color:black'> Kg</h7>";
    }else{    

    $valor_unit = $preco_venda/$qtd_caixa;
    $valor_unit = number_format($valor_unit,2,',','.');

    }

        
    $dados = array(
        'descricao' => $descricao,
        'preco' => "R$ ".$valor_unit,
        'embalagem' => $embalagem,
        'categoria' => $categoria
       
    );
    
    
    
    header('Content-Type: application/json');
    echo json_encode($dados);
} 

if (isset($_GET["produto_x2_2"])) {

    $produto = $_GET["produto_x2_2"];
  

    $sql = "SELECT * FROM gerencial_web where merc = '$produto'";
    $query = mysqli_query($conecta,$sql);
    $fetch = mysqli_fetch_array($query);
    $descricao = $fetch['descricao'];

    $emb = $fetch['embalagem'];
    $emb = str_ireplace(' ','-',$emb);
    $emb = substr($emb,13,8);
    $emb = explode('-',$emb);

    foreach($emb as $embal){
        if(strrpos($embal,"KG") || strrpos($embal,"X") || strrpos($embal,",")  || strrpos($embal,"") || strrpos($embal,"BDJ") || strrpos($embal,"PCT") || strrpos($embal,"UND") || strrpos($embal,"ML") || strrpos($embal,"G") || strrpos($embal,"KIT") || strrpos($embal,"L")){
        $embalagem = $embal;
        }else{
        $qtd_caixa = $embal;
        }
    }

    if($embalagem != "1G"){
        $categoria = "<h7 style='font-size:13px'>Emb. Unidade</h7>";
    }else{
        $embalagem = "";
        $categoria = "<h7 style='font-size:13px'>Kg na Peça</h7>";
    }

    $preco_venda = $fetch['preco_venda'];

    if($categoria == "<h7 style='font-size:13px'>Kg na Peça</h7>"){
        $valor_unit = $preco_venda;
        $valor_unit = number_format($valor_unit,2,',','.');
        $valor_unit = $valor_unit."<h7 style='font-size: 15px;color:black'> Kg</h7>";
    }else{    

    $valor_unit = $preco_venda/$qtd_caixa;
    $valor_unit = number_format($valor_unit,2,',','.');

    }

        
    $dados = array(
        'descricao' => $descricao,
        'preco' => "R$ ".$valor_unit,
        'embalagem' => $embalagem,
        'categoria' => $categoria
       
    );
    
    
    
    header('Content-Type: application/json');
    echo json_encode($dados);
} 
if (isset($_GET["produto_x4_3"])) {

    $produto = $_GET["produto_x4_3"];
  

    $sql = "SELECT * FROM gerencial_web where merc = '$produto'";
    $query = mysqli_query($conecta,$sql);
    $fetch = mysqli_fetch_array($query);
    $descricao = $fetch['descricao'];

    $emb = $fetch['embalagem'];
    $emb = str_ireplace(' ','-',$emb);
    $emb = substr($emb,13,8);
    $emb = explode('-',$emb);

    foreach($emb as $embal){
        if(strrpos($embal,"KG") || strrpos($embal,"X") || strrpos($embal,",")  || strrpos($embal,"") || strrpos($embal,"BDJ") || strrpos($embal,"PCT") || strrpos($embal,"UND") || strrpos($embal,"ML") || strrpos($embal,"G") || strrpos($embal,"KIT") || strrpos($embal,"L")){
        $embalagem = $embal;
        }else{
        $qtd_caixa = $embal;
        }
    }

    if($embalagem != "1G"){
        $categoria = "<h7 style='font-size:13px'>Emb. Unidade</h7>";
    }else{
        $embalagem = "";
        $categoria = "<h7 style='font-size:13px'>Kg na Peça</h7>";
    }

    $preco_venda = $fetch['preco_venda'];

    if($categoria == "<h7 style='font-size:13px'>Kg na Peça</h7>"){
        $valor_unit = $preco_venda;
        $valor_unit = number_format($valor_unit,2,',','.');
        $valor_unit = $valor_unit."<h7 style='font-size: 15px;color:black'> Kg</h7>";
    }else{    

    $valor_unit = $preco_venda/$qtd_caixa;
    $valor_unit = number_format($valor_unit,2,',','.');

    }

        
    $dados = array(
        'descricao' => $descricao,
        'preco' => "R$ ".$valor_unit,
        'embalagem' => $embalagem,
        'categoria' => $categoria
       
    );
    
    
    
    header('Content-Type: application/json');
    echo json_encode($dados);
}

if (isset($_GET["produto_x4_4"])) {

    $produto = $_GET["produto_x4_4"];
  

    $sql = "SELECT * FROM gerencial_web where merc = '$produto'";
    $query = mysqli_query($conecta,$sql);
    $fetch = mysqli_fetch_array($query);
    $descricao = $fetch['descricao'];

    $emb = $fetch['embalagem'];
    $emb = str_ireplace(' ','-',$emb);
    $emb = substr($emb,13,8);
    $emb = explode('-',$emb);

    foreach($emb as $embal){
        if(strrpos($embal,"KG") || strrpos($embal,"X") || strrpos($embal,",")  || strrpos($embal,"") || strrpos($embal,"BDJ") || strrpos($embal,"PCT") || strrpos($embal,"UND") || strrpos($embal,"ML") || strrpos($embal,"G") || strrpos($embal,"KIT") || strrpos($embal,"L")){
        $embalagem = $embal;
        }else{
        $qtd_caixa = $embal;
        }
    }

    if($embalagem != "1G"){
        $categoria = "<h7 style='font-size:13px'>Emb. Unidade</h7>";
    }else{
        $embalagem = "";
        $categoria = "<h7 style='font-size:13px'>Kg na Peça</h7>";
    }

    $preco_venda = $fetch['preco_venda'];

    if($categoria == "<h7 style='font-size:13px'>Kg na Peça</h7>"){
        $valor_unit = $preco_venda;
        $valor_unit = number_format($valor_unit,2,',','.');
        $valor_unit = $valor_unit."<h7 style='font-size: 15px;color:black'> Kg</h7>";
    }else{    

    $valor_unit = $preco_venda/$qtd_caixa;
    $valor_unit = number_format($valor_unit,2,',','.');

    }

        
    $dados = array(
        'descricao' => $descricao,
        'preco' => "R$ ".$valor_unit,
        'embalagem' => $embalagem,
        'categoria' => $categoria
       
    );
    
    
    
    header('Content-Type: application/json');
    echo json_encode($dados);
}  
?>