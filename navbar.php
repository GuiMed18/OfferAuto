

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" style="text-align:center">Folheto de Ofertas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

   

   

      <?php if(isset($_GET['tela']) && $_GET['tela'] == "ofertas" || !isset($_GET['tela'])){?>      

      <li class="nav-item active">

      <?php }else{ ?>

        <li class="nav-item">

        <?php } ?>

        <a class="nav-link" href="index.php?tela=ofertas">Ofertas</a>
        
      </li>
    

    

    </ul>


    <a class="nav-link" href="logout.php"> Logout</a>

  </div>
</nav>


</nav>


