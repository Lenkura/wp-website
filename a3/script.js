function nameerror() {
    var patt = /^[-a-zA-Z ,.']+$/
    var target = document.getElementById("name").value;
    if (!patt.test(target)) {
        document.getElementById("name").style.boxShadow = "1px 2px 9px #ac0a0a"
        document.getElementById("nameerror").style.visibility = "visible"
    } else {
        document.getElementById("name").style.boxShadow = "none"
        document.getElementById("nameerror").style.visibility = "hidden"
    }
}

function emailerror() {
    var patt = /^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-.]+$/
    var target = document.getElementById("email").value;
    if (!patt.test(target)) {
        document.getElementById("email").style.boxShadow = "1px 2px 9px #ac0a0a"
        document.getElementById("emailerror").style.visibility = "visible"
    } else {
        document.getElementById("email").style.boxShadow = "none"
        document.getElementById("emailerror").style.visibility = "hidden"
    }

}

function mobileerror() {
    var patt = /^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/
    var target = document.getElementById("mobile").value;
    if (!patt.test(target)) {
        document.getElementById("mobile").style.boxShadow = "1px 2px 9px #ac0a0a"
        document.getElementById("mobileerror").style.visibility = "visible"
    } else {
        document.getElementById("mobile").style.boxShadow = "none"
        document.getElementById("mobileerror").style.visibility = "hidden"
    }

}

function subjecterror() {
    var patt = /^$/
    var target = document.getElementById("subject").value;
    if (patt.test(target)) {
        document.getElementById("subject").style.boxShadow = "1px 2px 9px #ac0a0a"
        document.getElementById("subjecterror").style.visibility = "visible"
    } else {
        document.getElementById("subject").style.boxShadow = "none"
        document.getElementById("subjecterror").style.visibility = "hidden"
    }

}

function messageerror() {
    var patt = /^$/
    var target = document.getElementById("message").value;
    if (patt.test(target)) {
        document.getElementById("message").style.boxShadow = "1px 2px 9px #ac0a0a"
        document.getElementById("messageerror").style.visibility = "visible"
    } else {
        document.getElementById("message").style.boxShadow = "none"
        document.getElementById("messageerror").style.visibility = "hidden"
    }

}