<?php include("views/header.php"); ?>
<?php include("views/menu.php"); ?>
  <div class="container">
<?php
	if(isset($_GET['MSG'])){
		echo "   <div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">"."\n";
		echo "    <p>".urldecode($_GET['MSG'])."</p>"."\n";
		echo "    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>"."\n";
		echo "   </div>"."\n";
	}

	if(ifLogin()){
		if(isset($_GET['P']))	$P=$_GET['P'];
		else			$P="inscricao";
		
		switch($P){
			case "agendamento":	include("views/agendamento.php");	break;
			default:		include("views/inscricao.php");		break;
		}
	}else{
		if(isset($_GET['P']))	$P=$_GET['P'];
		else			$P="cadastro";

		switch($P){
			case "acesso":		include("views/acesso.php");		break;
			case "listar":		include("views/listar.php");		break;
			default:		include("views/cadastro.php");		break;
		}
	}
?>
  </div>
<?php include("views/footer.php"); ?>
