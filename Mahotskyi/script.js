function valid(form){            
    var fail = false;
    var name = form.inputtext2.value;
    var SecondName = form.inputtext1.value;
    var num = form.num.value;

    var letters = /[A-Za-z]/; 
    var cyfr = /[0-9]/;

    if(letters.test(name) == false)
        fail = "Неправильно введене ім'я!\n";
    if(letters.test(SecondName) == false)
        fail += "Неправильно введене прізвище!\n";
    if(cyfr.test(num) == false){
        fail += "Неправильно введений номер\n";
    }

    if(fail){
        alert(fail);
    }
    else return true;
}           
function sub(form) {
    if (confirm("Відправити?")) {
        valid(form);
        form.submit();
    }
}
        
let button = document.getElementById("inputsubmit1");
let title = document.getElementById("form_title");

button.addEventListener("mouseover", function(){button.style.color = 'red' });
button.addEventListener("mouseout", function(){button.style.color = '' });
title.addEventListener("click", function(){title.style.color = 'red' });
title.addEventListener("mouseout", function(){title.style.color = '' });

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