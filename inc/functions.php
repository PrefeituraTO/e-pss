<?php

function getURL(){
	return "//".$_SERVER['URL'];
}

function getSALT(){
	return $_SERVER['SALT'];
}

function getData($var){
	return date('d/m/Y',strtotime($var));
}

function getHora($var){
	return date('H:i',strtotime($var));
}

function conecta(){
	try{
		return new PDO( "mysql:host=".@getenv(BDHOST).";dbname=".@getenv(BDNAME),@getenv(BDUSER),@getenv(BDPASS));
        }catch(PDOException $e ){
                echo 'Erro ao conectar com o MySQL: '.$e->getMessage();
	}
}

function getPASS($PASS){
	return md5(md5($PASS).$_SERVER['SALT']);

}

function ifLogin(){
	if(isset($_SESSION['PSS']))	return true;
	else				return false;
}

function getCargos(){
	$PDO=conecta();
	$k=0;
	$SQL="SELECT * FROM cargo";
	$SQL2="SELECT * FROM inscricao WHERE idPessoa=".$_SESSION['PSS']['id'];
	if($result = $PDO->query($SQL)){
		$rows=$result->fetchAll();
		echo "    <ul class=\"list-unstyled\">"."\n";
		for ($i=0;$i<sizeof($rows);$i++){
			$k++;
			echo "     <li><input type=\"checkbox\" id=\"cargo".$rows[$i]['id']."\" name=\"cargo".$k."\" value=\"".$rows[$i]['id']."\"> ".utf8_encode($rows[$i]['cargo'])."</li>"."\n";
		}
		echo "    </ul>"."\n";
			echo "    <input type=\"hidden\" name=\"quant\" value=\"".$k."\" />"."\n";
	}
	if($result2=$PDO->query($SQL2)){
		$rows2=$result2->fetchAll();
		echo "    <script>"."\n";
		for($j=0;$j<sizeof($rows2);$j++){
			echo "     document.getElementById('cargo".$rows2[$j]['id']."').checked=true;"."\n";
		}
		echo "    </script>"."\n";
	}
}

function getAgendamento(){
	$SQL="SELECT * FROM config;";
	$PDO=conecta();
	$PRE='';

	if($result = $PDO->query($SQL)){
		$row = $result->fetchAll();
	
		$SQL1="SELECT * FROM agenda WHERE id>".$row[0]['dia']." LIMIT 1";
		if($result1=$PDO->query($SQL1)){
			$row1=$result1->fetchAll();
		}else{
			echo "Erro ao buscar datas";
		}
		$AH=60/$row[0]['tempoAtendimento'];
		$AH--;
		if($row[0]['quantAtendentes']==$row[0]['quant']){
			$PRE.="quant=0";
			if($row[0]['minuto']<$row[0]['tempoAtendimento']*($AH)){
				$PRE.=", minuto=";
				$PRE.=$row[0]['minuto']+$row[0]['tempoAtendimento'];
			}else{
				$PRE.=", minuto=00";
				if(($row[0]['hora']!=11)&&($row[0]['hora']!=17)){
					$PRE.=", hora=";
					$PRE.=$row[0]['hora']+1;
				}
				if($row[0]['hora']==11){
					$PRE.=", hora=14";
				}if($row[0]['hora']==17){
					$PRE.=", hora=08, dia=";
					$PRE.=$row1[0]['id'];
				}
			}
		}else{
			$PRE.="quant=";
			$PRE.=$row[0]['quant']+1;
		}
	}
	if($PRE!=''){
		$SQL2="UPDATE config SET ".$PRE;
		if($result2 = $PDO->query($SQL2));
	}
	$HORA=$row[0]['hora']; $MINUTO=$row[0]['minuto'];
	$DATA=$row1[0]['dia']." ".$HORA.":".$MINUTO.":00";
	return $DATA;
}

function calculaAtendimento(){
	$SQL="SELECT quantAtendentes,tempoAtendimento FROM config;";
	$PDO=conecta();
	if(!$result = $PDO->query($SQL)){
		$rows   = $result->fetchAll();
		$t1=$rows[0]['tempoAtendimento']*2; $t2=480-$t1; $t3=$t2/$rows[0]['tempoAtendimento'];
		$QuantAtendimentos=$t3*$rows[0]['quantAtendentes'];
		$SQL2="UPDATE config SET quantAtendendimentos=".$QuantAtendimentos.";";
		if(!$result2 = $PDO->query($SQL2)){
			echo "Erro ao atualizar atendimentos";
			echo $SQL2;
		}else{
			echo "Erro ao calcular atendimentos;";
			echo $SQL;
		}
	}
}

function Agendamento($ID){
	$PDO=conecta();
	$SQL1="SELECT * FROM inscricao WHERE idPessoa=".$ID;
	if($result1=$PDO->query($SQL1)){
		$rows1=$result1->fetchAll();
		$insc="    <table class=\"table-striped border container\">"."\n";
		$insc.="     <tr>"."\n";
		$insc.="      <td class=\"border\" colspan=\"3\"><b>Nome: </b>".$_SESSION['PSS']['nome']."</td>"."\n";
		$insc.="     </tr>"."\n";
		$insc.="     <tr>"."\n";
		$insc.="      <td class=\"border\" colspan=\"3\">"."\n";
		$insc.="       <ul class=\"list-unstyled\">"."\n";
		$insc.="        <li>[&nbsp;&nbsp;&nbsp;] Cédula de identidade (R.G.), original e xerox;</li>"."\n";
		$insc.="        <li>[&nbsp;&nbsp;&nbsp;] Cadastro de Pessoa Física (C.P.F.), original e xerox;</li>"."\n";
		$insc.="        <li>[&nbsp;&nbsp;&nbsp;] Curriculum Vitae atualizado e devidamente assinado pelo candidato;</li>"."\n";
		$insc.="        <li>[&nbsp;&nbsp;&nbsp;] Certificado de reservista, original e xerox, quando do sexo masculino;</li>"."\n";
		$insc.="        <li>[&nbsp;&nbsp;&nbsp;] Comprovante de votação nas últimas eleições ou declaração do TRE de estar quites com as obrigações eleitorais expedida no ano de 2017, original e xerox;</li>"."\n";
		$insc.="        <li>[&nbsp;&nbsp;&nbsp;] Declaração assinada por próprio punho de não ter sofrido penalidades por processo sindicante administrativo;</li>"."\n";
		$insc.="        <li>[&nbsp;&nbsp;&nbsp;] Certidão negativa original de antecedentes criminais, datada do mês e ano da realização da inscrição para concorrer ao presente Edital;</li> "."\n";
		$insc.="       </ul>"."\n";
	
		$insc.="      </td>"."\n";
		$insc.="     </tr>"."\n";
		for ($i=0;$i<sizeof($rows1);$i++){
			$SQL2="SELECT * FROM inscricao WHERE idCargo=".$rows1[$i]['idCargo'];
			if($result2=$PDO->query($SQL2)){
				$rows2=$result2->fetchAll();
				$insc.="      <td class=\"border\"><b>Inscrição: </b>".$rows1[$i]['id']."</td>"."\n";
				$insc.="      <td class=\"border\"><b>Data: </b>".getData($rows1[$i]['datahora'])."</td>"."\n";
				$insc.="      <td class=\"border\"><b>hora: </b>".getHora($rows1[$i]['datahora'])."</td>"."\n";
				$insc.="     </tr>"."\n";
				$SQL3="SELECT * FROM cargo WHERE id=".$rows2[0]['idCargo'];
				if($result3=$PDO->query($SQL3)){
					$rows3=$result3->fetchAll();
					$insc.="     <tr>"."\n";
					$insc.="      <td class=\"border\" colspan=\"3\"><b>Cargo: </b>".utf8_encode($rows3[0]['cargo'])."</td>"."\n";
					$insc.="     </tr>"."\n";
					$insc.="     <tr>"."\n";
					$insc.="      <td colspan=\"3\" class=\"border\">"."\n";
					$insc.="      <ul class=\"list-unstyled\">"."\n";
					$insc.="       ".utf8_encode($rows3[0]['docs']);
					$insc.="      </ul>"."\n";
					$insc.="      </td>"."\n";
					$insc.="     </tr>"."\n";
				}
			}
		}
		$insc.="   </table>";
	}
	return $insc;
}

function sendMail($mail,$subject,$body){
	$header	 = "Content-type: text/html; charset=\"UTF-8\" \r\n";
	$header .= "From: Não Responda <noreply@teofilootoni.mg.gov.br>" . "\r\n";
	$header	.= "Reply-To: Tecnologia da Informação <ti@teofilootoni.mg.gov.br>" . "\r\n" ;
	$header .= "MIME-Version: 1.0 \r\n";
	$header .= "Content-Transfer-Encoding: 8bit \r\n";
	$header .= "Date: ".date("r (T)")." \r\n";

	if(mail($mail,$subject,$body,$header))	return true;
	else					return false;
	
}

?>