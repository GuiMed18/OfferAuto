<!DOCTYPE html>
<html lang="pt-br">

<?php

if (isset($_GET['criatb']) == false) {

    include_once('backend/conexao.php');

    $conecta = new Conexao;
    $conecta = $conecta->conectaDB();

    $tabelas = array("gerencial_web", "gerencial_web_srt", "gerencial_web_temp", "log_ger_web", "usuarios_ger_web");


    if (mysqli_error($conecta) == FALSE) {

        #Valida se tabelas existe
        foreach ($tabelas as $tb) {
            $sql = "SHOW TABLES LIKE '$tb'";
            $query = mysqli_query($conecta, $sql);
            $linha = mysqli_num_rows($query);


            if ($linha === 0) {

                $tb_existe = false;
            }
        }
        if (isset($tb_existe) && $tb_existe === false) {
            header("Location: func/tela_insere_tb.php");
        }
    } else { ?>
        <br>
        <p class="text-center text-white">Erro de conexão com o DB </p>
        <p class="text-center text-white">Favor alterar os dados das variáveis login e pw do arquivo conexao.php </p>
<?php }
} ?>



        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Gerencial WEB</title>

            <!-- Custom fonts for this template-->
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="css/sb-admin-2.min.css" rel="stylesheet">

        </head>

        <body class="bg-gradient-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="p-5">
                                            <div class="text-center text-gray-700">
                                                <div class="sidebar-brand-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-journal-richtext" viewBox="0 0 16 16">
                                                        <path d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                    </svg>
                                                </div></br>
                                                <div class="sidebar-brand-text mx-3">
                                                    <h4>Jornal de Ofertas </h4>
                                                </div>
                                                <form class="form-signin" method="POST" action="func/verif_login.php">
                                                    <div class="card-body text-center">

                                                        <label for="inputEmail" class="sr-only">Email</label>
                                                        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus><br>
                                                        <label for="inputPassword" class="sr-only">Senha</label>
                                                        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>




                                                        <br>
                                                    </div>

                                                    <button class="btn btn-secondary shadow-2 mb-4" type="submit">Acessar</button>

                                            </div>
                                            </form>

                                          

                                    <?php if (isset($_GET['criatb']) && $_GET['criatb'] == "err") { ?>
                                        <p class="text-center text-danger">Erro na criação das tabelas </p>
                                    <?php } ?>

                                    <?php if (isset($_GET['criatb']) && $_GET['criatb'] == "success") { ?>
                                        <p class="text-center text-success">Tabelas Criadas com sucesso </p>
                                        <p class="text-center text-success">Login Padrão: admin </p>
                                        <p class="text-center text-success">Senha padrão: 123456 </p>
                                    <?php } ?>







                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Required Js -->
            <script src="assets/js/vendor-all.min.js"></script>
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


        </body>

</html>