
//Fuciones para esconder y mostrar las respuestas
function hideQuestion1() {
    document.getElementById("respuesta-1").style.visibility = "hidden";
    document.getElementById("pregunta-1").onclick = showQuestion1;
}

function showQuestion1() {
    document.getElementById("respuesta-1").style.visibility = "visible";
    document.getElementById("pregunta-1").onclick = hideQuestion1;
}

function hideQuestion2() {
    document.getElementById("respuesta-2").style.visibility = "hidden";
    document.getElementById("pregunta-2").onclick = showQuestion2;
}

function showQuestion2() {
    document.getElementById("respuesta-2").style.visibility = "visible";
    document.getElementById("pregunta-2").onclick = hideQuestion2;
}

function hideQuestion3() {
    document.getElementById("respuesta-3").style.visibility = "hidden";
    document.getElementById("pregunta-3").onclick = showQuestion3;
}

function showQuestion1() {
    document.getElementById("respuesta-3").style.visibility = "visible";
    document.getElementById("pregunta-3").onclick = hideQuestion3;
}

document.getElementById("pregunta-1").onclick = hideQuestion1;
document.getElementById("pregunta-2").onclick = hideQuestion2;
document.getElementById("pregunta-3").onclick = hideQuestion3;

//Funciones para validar la contraseña de manera dinámica
function validPassword(str) {
    var r = /^(?=.*\d)(?=.*[a-z]).{8,}$/;
    return r.test(str);
}

function validateForm(form) {
    if !validPassword(form.password.value) {
        inlineMessage('password', '<b>Contraseña Inválida</>')
    }
}