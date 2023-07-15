document.addEventListener("DOMContentLoaded", function() {
    // Verificar si hay un tema guardado en el localStorage
    var savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
    var themeStyle = document.getElementById('theme-style');
    themeStyle.setAttribute('href', savedTheme);
    }
});

function changeTheme(){
    var themeStyle=document.getElementById('theme-style');

    if(themeStyle.getAttribute('href')==='prueba-light.css'){
        themeStyle.setAttribute('href','prueba-dark.css');
        // Guardar el tema "dark" en el localStorage
    localStorage.setItem("theme", "prueba-dark.css");
    }else{
        themeStyle.setAttribute('href','prueba-light.css');
        // Guardar el tema "light" en el localStorage
    localStorage.setItem("theme", "prueba-light.css");
    }
}