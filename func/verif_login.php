<?php
	session_start();	
	date_default_timezone_set("America/Sao_Paulo");
	//Incluindo a conexão com banco de dados
	include_once("../backend/conexao.php");	

	$conexao = new Conexao;
	$connection = $conexao->conectaDB();


	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($connection, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($connection, $_POST['senha']);
		$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM usuarios_ger_web WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($connection, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
	
		// Store data in session variables
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];

			$login = $resultado['email'];
			$data = date('d/m/Y H:i');


			$sql_log = "INSERT INTO log_ger_web (usuario,data) VALUES ('$login','$data')";
			$insere_log = mysqli_query($connection,$sql_log);

			if($_SESSION['usuarioNiveisAcessoId']) {
			header("Location: ../index.php");
			
			}
			if(isset($resultado)){
				session_start();

													

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;  }

		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: ../login.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: ../login.php");
	}
?>