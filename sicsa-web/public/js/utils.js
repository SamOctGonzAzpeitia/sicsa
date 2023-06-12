function getValById(id) {
    return getById(id).value;
}
function getById(id) {
    return document.getElementById(id);
}

function uppercase(id) {
    getById(id).value = getById(id).value.toUpperCase();
}

function createAlert(type, message) {
    getById('mainContainer').insertAdjacentHTML('afterbegin', `
        <div class="${type == "success" ? "alert-success" : "alert-danger"}  alert-dismissible fade show alert>
            <p>${message}</p>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
        </div>
    `);
}

function loadAlert() {
    const searchParams = new URLSearchParams(window.location.search);
    if (searchParams.has('alert') && searchParams.has('message')) {
        createAlert(searchParams.get('alert'), searchParams.get('message'));
    }
}

document.addEventListener('DOMContentLoaded', function() {
    loadAlert();
}, false);
