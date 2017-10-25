   <h3>Bem Vindo ao Processo Seletivo Simplificado do Municipio de Teófilo Otoni.</h3>
   <h4><?php echo $_SESSION['PSS']['nome'];?>, selecione os cargos que deseja se inscrever: </h4>
   <form method="post" action="inc/inscricao.php">
<?php getCargos() ?>  
    <input type="submit" class="btn btn-primary" value="Enviar" />
   </form>
