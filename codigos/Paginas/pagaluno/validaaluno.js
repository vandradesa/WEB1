
function validarrela(){
    if (document.getElementById("arquivo").value == null || document.getElementById("arquivo").value == "") {
        alert("Insira um arquivo!");
        
    }
    if (document.getElementById("atividades").value == null || document.getElementById("atividades").value == "") {
        alert("Insira uma descrição!");
    }
}

function validarhora(){
    if(document.getElementById("horas_relatorio").value < 0 || document.getElementById("horas_relatorio").value == null || 
    document.getElementById("horas_relatorio").value == ''){
        alert("Valor de hora inválido!")
    }
}

