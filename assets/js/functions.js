function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
    var cpf = s;

    if ( (cpf == "00000000000") || (cpf == "11111111111") || (cpf == "22222222222") || (cpf == "33333333333") 
        || (cpf == "44444444444") || (cpf == "55555555555") || (cpf == "66666666666")
        || (cpf == "77777777777") || (cpf == "88888888888") || (cpf == "99999999999")){
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
