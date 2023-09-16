<!DOCTYPE html>
<html lang="pt-br">

<head>
    

<?php include('../backend/cria_tb.php');?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php if($_GET['criatb'] == "success"){?>
    <meta http-equiv="refresh" content="10; url=../login.php?criatb=success">
    <?php }elseif( $_GET['criatb'] = "err"){?>
        <meta http-equiv="refresh" content="10; url=../login.php?criatb=err">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gerencial WEB</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        @keyframes loadingAnimation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

      
        .image-loader {
            left: 20%;
            width: 200px;
            height: 200px;
            border: 20px solid transparent;
            border-top: 20px solid #32CD32;
            /* Verde lima */
            border-radius: 50%;
            animation: loadingAnimation 1.5s linear infinite;
            position: relative;
        }

        .image-loader:before {
            content: "";
            width: 80px;
            height: 80px;
            background-color: #ff5722;
            /* Laranja */
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .custom-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>

</head>

<body class="bg-gradient-primary">
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-xl-5 col-lg-6 col-md-8">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">
                 
                        <div class="text-center text-gray-700">
                            
                                                  
                            <div class="sidebar-brand-text mx-3">
                                <h4>Gerencial Web  </h4> <hr>
                            </div>
                            <br>

                            <div class="image-loader"></div>

                            <br>
                            <hr>
                            
                            <div class="sidebar-brand-text mx-3">
                                <h5>Criando tabelas no DB <br> Por favor, aguarde!</h5>
                            </div>
                            
                            <br>
                            <p class="mb-0 text-primary">&copy; Guilherme de Medeiros - 2023.</p> 

                      
                </div>
            </div>
        </div>
    </div>






        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>