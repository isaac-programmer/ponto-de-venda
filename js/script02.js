let anoAtual = document.getElementById("ano") 
let data = new Date() 
let ano = data.getFullYear()
anoAtual.innerHTML = `${ano}`

function esconder(){
    let painel = document.getElementsByClassName("panel-body")[0]
    painel.style.display = "none"
}

$(function(){
    $('.alert').delay(3000);
    $('.alert').hide(2000);
});


