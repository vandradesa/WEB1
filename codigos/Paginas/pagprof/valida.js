

function validarproj(){ //Verifica os campos do projeto
    if (document.getElementById("nome projeto").value == null || document.getElementById("nome projeto").value == "") {
        alert("Insira o nome do projeto!");
        // console.log("teste");
    }
    if (document.getElementById("resumo projeto").value == null || document.getElementById("resumo projeto").value == "") {
        alert("Insira o resumo do projeto!");
        // console.log("teste");
    }
}  

function validaraluno(){    //Valida os campos do aluno
    if (document.getElementById("nome_aluno").value == null || document.getElementById("nome_aluno").value == "") {
        alert("Insira o nome do aluno!");
        // console.log("teste");
    }
    if (document.getElementById("matricula").value == null || document.getElementById("matricula").value == "") {
        alert("Insira a matrícula do aluno!");
        // console.log("teste");
    }
}


function validaatividade(){     //Valida o campo da atividade
    if (document.getElementById("titulo").value == null || document.getElementById("titulo").value == "") {
        alert("Insira o titulo da atividade!");
        // console.log("teste");
    }        
}

function ValidarCPF(Objcpf) {       //Valida o CPF do aluno
  
    if (Objcpf.value == null || Objcpf.value == "") {
      
      return false;
    }
    var cpf = Objcpf.value;
    exp = /\.|\-/g;
    cpf = cpf.toString().replace(exp, "");
    var digitoDigitado = eval(cpf.charAt(9) + cpf.charAt(10));
    var soma1 = 0,
      soma2 = 0;
    var vlr = 11;
  
    for (i = 0; i < 9; i++) {
      soma1 += eval(cpf.charAt(i) * (vlr - 1));
      soma2 += eval(cpf.charAt(i) * vlr);
      vlr--;
    }
    soma1 = (soma1 * 10) % 11 == 10 ? 0 : (soma1 * 10) % 11;
    soma2 = ((soma2 + 2 * soma1) * 10) % 11;
  
    var digitoGerado = soma1 * 10 + soma2;
    if (digitoGerado != digitoDigitado) alert("CPF Invalido!");
  
}

function maxLencpf(input) {     //Limita a quantidade de caracteres
    if (input.value.length > 11) {
      input.value = input.value.slice(0, 11);
    }
  }