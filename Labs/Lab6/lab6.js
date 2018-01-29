
//Fuciones para esconder y mostrar las respuestas
function hideQuestion1() {
    document.getElementById("respuesta-1").style.visibility = "hidden";
    document.getElementById("pregunta-1").onmouseover = showQuestion1;
}

function showQuestion1() {
    document.getElementById("respuesta-1").style.visibility = "visible";
    document.getElementById("pregunta-1").onmouseover = hideQuestion1;
}

function hideQuestion2() {
    document.getElementById("respuesta-2").style.visibility = "hidden";
    document.getElementById("pregunta-2").onmouseover = showQuestion2;
}

function showQuestion2() {
    document.getElementById("respuesta-2").style.visibility = "visible";
    document.getElementById("pregunta-2").onmouseover = hideQuestion2;
}

function hideQuestion3() {
    document.getElementById("respuesta-3").style.visibility = "hidden";
    document.getElementById("pregunta-3").onmouseover = showQuestion3;
}

function showQuestion3() {
    document.getElementById("respuesta-3").style.visibility = "visible";
    document.getElementById("pregunta-3").onmouseover = hideQuestion3;
}

document.getElementById("pregunta-1").onmouseover = showQuestion1;
document.getElementById("pregunta-2").onmouseover = showQuestion2;
document.getElementById("pregunta-3").onmouseover = showQuestion3;

//Mostrar requisitos de contraseña
function showPasswordReqs() {
    document.getElementById("password-reqs").style.height = "100px";
}


password = document.getElementById("pwd").password;
password.onfocus = showPasswordReqs;
password.onblur = function(){
    document.getElementById("password-reqs").style.height = "0";
}

//setInterval
var off = true;
document.getElementById("btn-color").onclick = function(){
    var bod = document.body;
        if(off){
            x = setInterval(function(){off = false; changeBackground();}, 1500);
        }else{
            clearInterval(x);
            bod.style.backgroundColor = "white"
            off = true;
        }
    function changeBackground(){
        var bod = document.body;
        bod.style.backgroundColor = bod.style.backgroundColor == "yellow" ? "red" : "yellow";
    }
}

//Drag and Drop
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}