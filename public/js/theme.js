// claro, nion, adolescente, adulto, oscuro
function setTheme(theme, id) {
    // console.log("Cambiar tema");
    console.log(typeof id, id);
    let link = document.getElementById('theme');
    let href = link.href.split('/');
    href.pop();
    href.push(`${theme}.css`);
    link.href = href.join('/');

    try {
        fetch('api/theme', {
            method: 'POST',
            headers: {
                "Accept": "Application/json",
                "Content-Type": "Application/json"
            },
            body: JSON.stringify({ id, theme })
        })
            .then(async res => console.log(await res.json()))
            .catch(error => console.log(error))

    } catch (error) {
        console.error(error);
    }
}

function loadTema() {
    var t = localStorage.getItem("tema");

    if (t) {
        setTheme(t);
    } else {
        localStorage.setItem("tema", 'claro');
    }
}
