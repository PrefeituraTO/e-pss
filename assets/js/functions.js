function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
    var cpf = s;

    if (
        (cpf == "00000000000") ||
        (cpf == "11111111111") ||
        (cpf == "22222222222") ||
        (cpf == "33333333333") ||
        (cpf == "44444444444") ||
        (cpf == "55555555555") ||
        (cpf == "66666666666") ||
        (cpf == "77777777777") ||
        (cpf == "88888888888") ||
        (cpf == "99999999999")
    ){
        alert("CPF Inválido")
        v = true;
        document.getElementById('cpf').value=null;
        return false; 
    }

    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }

    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        document.getElementById('cpf').value=null;
        document.getElementById('CPF').value=null;
        return false;   
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        document.getElementById('cpf').value=null;
        document.getElementById('CPF').value=null;
        return false;
        
    }
    if (!v) {
        
    }
}

function dataConta(c){
    if(c.value.length ==2){
        c.value += '/';
    }
    if(c.value.length==5){
        c.value += '/'; 
    }
}

function formatacpf(c){
    if(c.value.length ==3){
        c.value += '.';
    }
    if(c.value.length==7){
        c.value += '.'; 
    }
    if(c.value.length==11){
        c.value += '-'; 
    }
}

function validaCadastro(){
    cont=0
    if(document.getElementById("nome").value.length<5){
        document.getElementById("nome").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("nome").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("mae").value.length<5){
        document.getElementById("mae").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("mae").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("cpf").value.length<11){
        document.getElementById("cpf").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("cpf").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("rg").value.length<7){
        document.getElementById("rg").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("rg").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("datanasc").value.length<9){
        document.getElementById("datanasc").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("datanasc").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("sexo").value==""){
        document.getElementById("sexo").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("sexo").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("rua").value.length<2){
        document.getElementById("rua").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("rua").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("numero").value.length<1){
        document.getElementById("numero").style="border: solid 1px #ff0000"
        cont++
    }else{
        document.getElementById("numero").style="border: solid 1px #dddddd"

    }

    if(document.getElementById("bairro").value.length<3){
        document.getElementById("bairro").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("bairro").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("cidade").value.length<7){
        document.getElementById("cidade").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("cidade").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("uf").value==""){
        document.getElementById("uf").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("uf").style="border: solid 1px #dddddd"
    }

    if(document.getElementById("email").value.length<7){
        document.getElementById("email").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("email").style="border: solid 1px #dddddd"
    }

    if((document.getElementById("senha").value.length<6) || (document.getElementById("senha").value != document.getElementById("confirmar").value)) {
        document.getElementById("senha").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("senha").style="border: solid 1px #dddddd"
    }

    if((document.getElementById("confirmar").value.length<6) || (document.getElementById("senha").value != document.getElementById("confirmar").value)) {
        document.getElementById("confirmar").style="border: solid 1px #ff0000"
        cont++	
    }else{
        document.getElementById("confirmar").style="border: solid 1px #dddddd"
    }

   if(cont > 0){
   	alert("Campos obrigatórios não foram preenchidos ou estão preenchidos de forma incorreta")
        return false
   }else{
        return true
   }
}

function validaInscricao(){
    cont=0
    cargos.forEach(
        function validaInsc(id){
           if(document.getElementById(id).checked==true) cont++
	}
    )
    if(cont == 0){
   	alert("Você deve selecionar pelo menos um cargo")
        return false
    }else{
        return true
    }
}
