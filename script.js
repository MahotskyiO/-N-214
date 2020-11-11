let title = document.getElementById("form_title");

function lightTheme(){
    let body = document.getElementById("body");
    body.style.background = "grey";
    let btn = document.getElementById("inputsubmit1");
    btn.style.background = "grey";
    let topnav = document.getElementById("menu");
    topnav.style.background = "grey";

    let logo = document.getElementById("graficlogo");
    logo.src = "img/logoLight.jpg";
    let theme = document.getElementById("theme");
    theme.src = "img/moon.png";
}

function defaultTheme(){
    let body = document.getElementById("body");
    body.style.background = "black";
    let btn = document.getElementById("inputsubmit1");
    btn.style.background = "black";
    let topnav = document.getElementById("menu");
    topnav.style.background = "black";

    let logo = document.getElementById("graficlogo");
    logo.src = "img/logo.jpg";
    let theme = document.getElementById("theme");
    theme.src = "img/sun.jpg";
}

let change = document.getElementById("theme");
change.addEventListener("click", lightTheme);
change.addEventListener("dblclick", defaultTheme);