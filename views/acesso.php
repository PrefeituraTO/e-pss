   <h3>Caso tenha esquecido sua senha, informe os dados no formulário abaixo e será enviado um link para o seu e-mail com as instruções para alteração da senha</h3>
   <form method="post" action="inc/acesso.php">

    <div class="form-group">
     <label class="sr-only" for="email">E-Mail</label>
     <div class="input-group">
      <div class="input-group-addon">E-Mail</div>
      <input type="text" class="form-control" id="email" name="email" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="cpf">CPF</label>
     <div class="input-group">
      <div class="input-group-addon">CPF</div>
      <input type="text" class="form-control" id="cpf" name="cpf" />
     </div>
    </div>

<?php
	if(isset($_GET['TOKEN'])){
?>
    <div class="form-group">
     <label class="sr-only" for="senha">Senha</label>
     <div class="input-group">
      <div class="input-group-addon">Senha</div>
      <input type="password" class="form-control" id="senha" name="senha" />
     </div>
    </div>

    <div class="form-group">
     <label class="sr-only" for="Confirmar">Confirmar</label>
     <div class="input-group">
      <div class="input-group-addon">Confirmar</div>
      <input type="password" class="form-control" id="Confirmar" name="Confirmar" />
     </div>
    </div>
    <input type="hidden" class="form-control" id="token" name="token" value="<?php echo $_GET['TOKEN']?>" />
<?php
	}
?>

    <div class="form-group">
     <input type="submit" class="btn btn-primary" value="Enviar"/>
    </div>

   </form>

