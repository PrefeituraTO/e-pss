   <h3 class="hidden-print">Bem Vindo ao Processo Seletivo Simplificado do Municipio de Teófilo Otoni.</h3>
   <h4 class="hidden-print">Imprima o agendamento a baixo, compareça no local marcado no edital, com os documentos listados no edital na data e hora marcados neste agendamento.</h4>
<?php echo Agendamento($_SESSION['PSS']['id']); ?> 
   <div class="btn-group">
    <a href="#" onclick="window.print()" class="hidden-print btn btn-dark">Confirmar e Imprimir</a>
    <a href="?P=inscricao" class="hidden-print btn btn-secondary">Editar Inscrição</a>
    <a href="/inc/logoff.php" class="hidden-print btn btn-danger">Sair</a>
   </div>
