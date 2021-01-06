let anoAtual = document.getElementById("ano") 
let data = new Date() 
let ano = data.getFullYear()
anoAtual.innerHTML = `${ano}`

$(function(){
    $('.alert').delay(3000);
    $('.alert').hide(2000);
});


