<?php
	session_destroy();
	include ("functions.php");
	$PDO=conecta();
	
	$TOKEN=sha1(date('l jS \of F Y h:i:s A'));

	if(isset($_POST['token'])){
		$SQL="UPDATE pessoa SET senha='".getPASS($_POST['senha'])."', token=NULL WHERE token='".$_POST['token']."' AND cpf='".$_POST['cpf']."' AND email='".$_POST['email']."'";
		if($RES=$PDO->query($SQL))	header('location: /?MSG='.urlencode("Senha Atualizada"));
		
	}else
		if($_POST['cpf'] && $_POST['email']){
			$SQL="SELECT id,nome,cpf,email FROM pessoa WHERE cpf='".$_POST['cpf']."' AND email='".$_POST['email']."'";
			if($RES = $PDO->query($SQL)){
				$ROW = $RES->fetchAll();
				$body="<p>Olá ".$ROW[0]['nome']." você solicitou a troca da senha no Sistema Eletronico de Processo Seletivo Simplificado do Municipio de Téofilo Otoni.</p>";
		       		$body.="<p>Pedimos que acesse o link:".getURL()."/?P=acesso&TOKEN=".$TOKEN."</p>";
				$SQL2="UPDATE pessoa SET token='".$TOKEN."' WHERE id=".$ROW[0]['id'].";";
				if($RES2 = $PDO->query($SQL2)){
					sendMail($ROW[0]['email'],"[e-PSS] Serviço de Troca de Senha",$body);
					header('location: /?MSG='.urlencode("Dados de Troca de Senha enviados para o e-mail."));
				}else	header('location: /?MSG='.urlencode("Erro ao enviar e-mail"));
		}else	header('location: /?MSG='.urlencode("Usuário ou senha inválidos"));
	}
?>
