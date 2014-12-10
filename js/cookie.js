window.onload = function(){
    
        mostraCookie();
}

function gravaCookie(){
    var nome = prompt("Informe seu nome:", "");
    
    if (nome != null && nome != ""){
        var data = new Date(2014, 10, 30, 1, 1, 1);
        
        document.cookie = "nome=" + nome + ";expires=" + data.toUTCString();
        location.reload();
    }
}

function mostraCookie(){
    var cookie = document.cookie;
    var partes = cookie.split("=");
    var nome = partes[1];
    var aux;
    var cab = document.getElementById("usuario");
    if(nome)
        cab.innerHTML = "Olá, " + nome + "!";
}