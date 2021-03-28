function setTheme(theme) {
    console.log("Cambiar tema");
    localStorage.setItem("tema", theme);
    var themes = ["claro", "oscuro","adolescente","adulto","nino"];
    for (var i=0; i < themes.length; i++) {

        var styleSheet = document.getElementById(themes[i]);
        if (themes[i] == theme) {
            styleSheet.removeAttribute("disabled");
        } else {
            styleSheet.setAttribute("disabled", "disabled");
        }
    }
}

function loadTema(){
    var t = localStorage.getItem("tema");

    if(t){
        setTheme(t);
    }else{
        localStorage.setItem("tema", 'claro');
    }


}
