  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-pmto hidden-print">
   <a class="navbar-brand" href="#">e-PSS</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item"><a class="nav-link" href="?P=inscricao">Editar Inscrição</a></li>
    </ul>
<?php if(ifLogin()){ ?>
    <ul class="navbar-nav">
     <li class="nav-item" style="color:#FFFFFF; padding:10px 10px 0 0 "><?php echo $_SESSION['PSS']['nome']." -".$_SESSION['PSS']['id']?></li>
     <li class="nav-item"><a href="inc/logoff.php" ><button class="btn btn-outline-danger my-2 my-sm-0">Sair</button></a></li>
    </ul>
<?php }else{ ?>
    <form class="form-inline mt-2 mt-md-0" method="post" action="/inc/login.php">
     <input class="form-control mr-sm-2" type="text" placeholder="CPF" name="CPF" aria-label="CPF">
     <input class="form-control mr-sm-2" type="password" placeholder="Senha" name="password" aria-label="Senha">
     <div class="btn-group">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Entrar</button> 
      <a class="btn btn-outline-info" href="?P=acesso" >Recuperar Senha</a>
     </div>
    </form>
<?php } ?>
   </div>
  </nav>
