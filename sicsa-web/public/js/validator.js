function validate(
    domId,
    validationType,
    max = Infinity,
    min = -Infinity,
    extraOptions = {
        specialChars: false
    }
) {
    let error = undefined;
    let domElem = getById(domId);
    let value = getValById(domId);
    let notification = domElem.nextElementSibling;
    switch (validationType) {
        case "text":
            error = validateText(value, max, min, extraOptions.specialChars);
            break;
        case "number":
            error = validateNumber(value, max, min);
            break;
        case "email":
            error = validateEmail(value);
            break;
        case "rfc":
            error = validateRFC(value);
            break;
        case "phone":
            error = validatePhoneNumber(value);
            break;
        case "password":
                error = validatePass(value);
                break;
        case "password_confirm":
            error = validatePassword(value);
            break;
        default:
            console.error(`Unknown validation type: ${validationType}`);
            break;
    }

    if (error) {
        domElem.classList.remove("border-success");
        domElem.classList.add("border-danger");
        notification.innerText = error;
        notification.classList.remove(".placeholder-glow");
        notification.classList.add(".placeholder-glow");
        notification.hidden = false;
    } else {
        notification.classList.remove(".placeholder-glow");
        domElem.classList.add("border-success");
        domElem.classList.remove("border-danger");
        notification.hidden = true;
    }
}

function validateText(text, max, min=0, specialChars){
    //regex to prevent special characters but allow spaces
    let regex = /^[a-zA-Z0-9\s]+$/;

    if (typeof text !== "string" || ! text instanceof String) {
        return 'El campo debe ser un string';
    }
    if (text.length < min) {
        return `El campo debe tener al menos ${min} caracteres`;
    }
    if (text.length > max) {
        return `El campo debe tener menos de ${max} caracteres`;
    }
    if (
        !specialChars &&
        String(text).match(/[^a-zA-Z0-9\sáéíóúÁÉÍÓÚñÑüÜ ]+$/)
    ) {
        return "El campo debe contener solo letras y números";
    }
    return undefined;
}


function validateNumber(number, max, min=0){
    max = parseInt(max);
    min = parseInt(min);
    if (isNaN(parseInt(number))) {
        return 'Debe ser un número';
    }
    if (number < min) {
        return `Debe ser mayor o igual a ${min}`;
    }
    if (number > max) {
        return `Debe ser menor o igual a ${max}`;
    }
    return undefined
}

function validateEmail(email) {
    const valid = String(email)
        .toLowerCase()
        .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    return valid ? undefined : 'El email no es válido';
};

function validateRFC(rfc) {
    const valid = String(rfc)
        .match(/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$/);
    return valid ? undefined : 'El RFC no es válido';
}


function validatePhoneNumber(phoneNumber) {
    const valid = String(phoneNumber).match(/^([0-9]{10})$/);
    return valid ? undefined : "Deben ser 10 digitos";
}

function validatePass(password){
    console.log(password);
    const valid = String(password).match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/);
    return valid ? undefined : "La contraseña debe tener mínimo 8 caracteres\n Una mayúscula\n Una minúscula \nUn caracter especial (#?!@$%^&*-)"
}

function validatePassword(password){
    let b = document.getElementById("password").value
    return password === b ? undefined: "La contraseña no coincide"
}

