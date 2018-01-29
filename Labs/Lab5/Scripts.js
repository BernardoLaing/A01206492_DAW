
function validPassword(str) {
    var r = /^(?=.*\d)(?=.*[a-z]).{8,}$/;
    return r.test(str);
}

function validateForm(e) {
    if(this.password.value != "" && (this.password.value == this.verif.value)) {
        if(!validPassword(this.password.value)){
            alert("Contraseña inválida");
            e.preventDefault();
            return;
        }
    }else {
        alert("Las contraseñas no coinciden")
        e.preventDefault();
        return;
    }
    alert("Contraseña validada!")
    return;
}
var pwdForm = document.getElementById("pwd");
pwdForm.addEventListener("submit", validateForm, false);

function shop(e) {
    var precio = (this.refrescos.value *10 ) + (this.pizza.value * 80) + (this.cerveza.value * 15);
    var iva = precio *0.16;
    var total = precio + iva;
    var p = document.getElementById("precio");
    p.innerText = precio;
    var i = document.getElementById("iva");
    i.innerText = iva;
    var t = document.getElementById("total");
    t.innerText = total;
    e.preventDefault();
}

var storeForm = document.getElementById("tienda");
storeForm.addEventListener("submit", shop, true);

function rentABook(e) {
    var user = this.user.value;
    var book = this.book.value;
    var days = 7;
    alert("El usuario " + user + " se lleva el libro " + book + " por " + days + " días.");
    e.preventDefault();
}

var rentForm = document.getElementById("renta");
rentForm.addEventListener("submit", rentABook, false);
