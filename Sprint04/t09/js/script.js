function add() {
    let str = document.getElementById("string").value;
    let history = document.getElementById("rofl");
    let res = " --> " + str + ' [' + new Date().toLocaleDateString() + ', ' + new Date().toLocaleTimeString() + ']' +  "<br>";
    res = res.split('/').join('.');
    history.innerHTML += res;
    localStorage.setItem("storage", res);
}

function clear_gay() {
    localStorage.clear();
    document.getElementById("rofl").innerHTML = "";
}

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("rofl").innerHTML = localStorage.getItem("storage");
});