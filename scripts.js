function botonmenu() {
    var content = document.querySelector(".collapsible-menu .menu-content");
    var img = document.getElementById("botonimg");

    if (content.classList.contains("expanded")) {
        content.classList.remove("expanded");
        img.src="img/logo_trivialopen.png";

    } else {
        content.classList.add("expanded");
    }
    
    if (content.classList.contains("expanded")) {
        img.src="img/logo_trivialopen.png";
    } else {
        img.src="img/logo_trivial.png";
    }
}

function guardarDatos(event) {
    event.preventDefault();
    const form = document.getElementById('Inscripcion');
    const formData = new FormData(form);
    // Send data to server using Fetch API
    fetch('inscripcion.php', {
        method: 'POST',
        body: formData
    })
    .then(data => {
        console.log('Datos guardados:', data);
        alert('¡Gracias por inscribirte! ¡Nos vemos el' + " " + formData.get('trivial') + "!");
        window.history.back();
    })
}