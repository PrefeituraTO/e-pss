<?php
	include("functions.php");
	session_start();

	extract ($_POST);
	$PASS=getPASS($senha);
	$SQL="
	INSERT INTO pessoa
		(nome,mae, pai, cpf, rg, datanasc, sexo, rua, numero, complemento, bairro, cidade, uf, email, senha)
	VALUES
		('".$nome."','".$mae."','".$pai."','".$cpf."','".$rg."','".$datanasc."','".$sexo."','".$rua."','".$numero."','".$complemento."','".$bairro."','".$cidade."','".$uf."','".$email."','".$PASS."')";

	$PDO=conecta();
	if($RES = $PDO->query($SQL)){
		$_SESSION['PSS']['id']=$PDO->lastInsertId();
		$_SESSION['PSS']['nome']=$nome;
		$_SESSION['PSS']['cpf']=$cpf;
		$_SESSION['PSS']['email']=$email;
		header('location:/');
	}else{
		header('location:/?MSG=CPF e/ou E-Mail já cadastrado.');
	}	
?>
