<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	header("Location: login.php");
	exit;
}


?>

<head>

	<link rel="stylesheet" href="css/style_ofertas.css">	
	<script src="js/canvas/jquery/jquery-3.6.0.min.js"></script>
	<script src="js/canvas/html2canvas.min.js"></script>

	<?php
	include('head.php');
	include('navbar.php');
	
	


	?>



</head>


<body id="page-top" class="bg-primary">

	<div class="container-fluid" style="margin-top:15px">

		<div class="row">
			<div class="col-xl-12 col-md-6">

				<div class="input-group">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Opções</label>
					</div>
					<select class="custom-select" name="seleciona" id="seleciona">
						<option value="" hidden>Selecione o estilo de oferta</option>
						<option value="x1">Ofertas X1</option>
						<option value="x2">Ofertas X2</option>
						<option value="x4">Ofertas X4</option>
					</select>
				</div>

			</div>

		</div>


	</div>

	<?php

	if (isset($_GET['estilo']) && $_GET['estilo'] == "x1") {

		include('func/sistema_ofertas.php');
	} elseif (isset($_GET['estilo']) && $_GET['estilo'] == "x2") {

		include('func/sistema_ofertas_X2.php');
	}elseif (isset($_GET['estilo']) && $_GET['estilo'] == "x4") {

		include('func/sistema_ofertas_X4.php');
	}


	?>



</body>





<script>
	document.getElementById("seleciona").addEventListener("change", function() {
		var selectedValue = this.value;
		if (selectedValue === "x1") {
			window.location.href = "index.php?estilo=x1&tela=ofertas";
		} else if (selectedValue === "x2") {
			window.location.href = "index.php?estilo=x2&tela=ofertas";
		} else if (selectedValue === "x4") {
			window.location.href = "index.php?estilo=x4&tela=ofertas";
		}
	});
</script>



</html>