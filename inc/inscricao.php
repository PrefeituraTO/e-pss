<?php
	include("functions.php");
	session_start();
	extract ($_POST);
	print_r($_POST);
	$PDO=conecta();
	$body="Olá, ".$_SESSION['PSS']['nome'].", Você se inscreveu para o PSS da Secretaria Municipal de Ação Social";

	$SQL1="SELECT datahora FROM inscricao WHERE idPessoa=".$_SESSION['PSS']['id']." LIMIT 1";
	if($RES1=$PDO->query($SQL1)){
		$ROW1=$RES1->fetchAll();
		if(sizeof($ROW1)!=0)	$DATA=$ROW1[0]['datahora'];
		else			$DATA=getAgendamento();
		
		$SQL2="DELETE FROM inscricao WHERE idPessoa=".$_SESSION['PSS']['id'];
		echo $SQL2."\n";
		$RES2=$PDO->query($SQL2);
	}

<<<<<<< HEAD
	for($i=0;$i<=$quant;$i++){
=======
	for($i=1;$i<=$quant;$i++){
		echo $i."\n";
>>>>>>> 8fc40b3f8e12414f6caf44a058c2e795a1615ef0
		$tmpCargo='cargo'.$i;
		if(!empty($$tmpCargo)){
			$SQL="INSERT INTO inscricao (datahora,idCargo,idPessoa) VALUES ('".$DATA."',".$$tmpCargo.",".$_SESSION['PSS']['id'].")";
			if(!$RES=$PDO->query($SQL)){
				header("location: /?MSG=".urlencode("Erro ao efetuar inscrição"));
			}
		}
	}
	$body.=Agendamento($_SESSION['PSS']['id']);
	if(sendMail($_SESSION['PSS']['email'],"[e-PSS] Inscrição Processo Seletivo",$body))
		header("location: /?P=agendamento");
	else
		header("location: /?MSG=".urlencode("Erro ao enviar e-mail"));
?>
