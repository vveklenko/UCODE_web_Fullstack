function transformation() {
    mode *= -1;
    if (mode < 0) {
        let hero = document.getElementById('hero');
        hero.innerHTML = "Hulk";
        hero.style.fontSize = "130px";
        hero.style.letterSpacing = "6px"
        let lab = document.getElementById('lab');
        lab.style.backgroundColor = "rgb(120, 148, 84)";
    }
    else {
        let hero = document.getElementById('hero');
        hero.innerHTML = "Bruce Banner";
        hero.style.fontSize = "60px";
        hero.style.letterSpacing = "2px"
        let lab = document.getElementById('lab');
        lab.style.backgroundColor = "#ffb300";
    }
}

let mode = 1;