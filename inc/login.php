<?php
	include ("functions.php");
	session_start();
		
	$PDO=conecta();
	if($_POST['CPF'] && $_POST['password']){
		$SQL="SELECT id, nome, cpf, email, senha FROM pessoa WHERE cpf='".$_POST['CPF']."' AND senha='".getPASS($_POST['password'])."'";
		if($RES = $PDO->query($SQL)){
			$ROW = $RES->fetchAll();
				if(($ROW[0]['cpf']!=$_POST['CPF'])||($ROW[0]['senha']!=getPASS($_POST['password']))){
					header('location:/?MSG=Usuário ou Senha inválidos');
				}else{
					$_SESSION['PSS']=$ROW[0];
					header('location:/?P=agendamento');
				}
		}else	header('location: /?MSG='.urlencode("Usuário ou senha inválidos"));
	}
?>
