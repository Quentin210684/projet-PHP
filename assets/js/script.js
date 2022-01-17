function contact() {
    let name = document.forms["joinUs"]["name"];
    let email = document.forms["joinUs"]["email"];
    let subject = document.forms["joinUs"]["subject"];
    let what = document.forms["joinUs"]["Sujet"];
    let comment = document.forms["joinUs"]["Commentaire"];

    if (name.value == "") {
        alert("Mettez votre nom.");
        name.focus();
        return false;
    }

    if (email.value == "") {
        alert("Mettez une adresse email valide.");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0) {
        alert("Mettez une adresse email valide.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0) {
        alert("Mettez une adresse email valide.");
        email.focus();
        return false;
    }
    if (subject.value == "") {
        alert("Mettez votre sujet.");
        subject.focus();
        return false;
    }

    if (what.selectedIndex < 1) {
        alert("Mettez votre cours.");
        what.focus();
        return false;
    }

    if (comment.value == "") {
        alert("Écrivez un commentaire.");
        comment.focus();
        return false;
    }

    return true;
}