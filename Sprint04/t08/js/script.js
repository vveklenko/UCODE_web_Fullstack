let nc = 0, cc = 0, rc = 0;

function number() {
    nc++;
    document.getElementById("number").value = `The phone number: [${nc}]`;
    let str = document.getElementById("word").value;
    let text = document.getElementById("string").value;
    let history = document.getElementById("rofl");
    if (str.length != 10 || isNaN(str)) {
        history.innerHTML = "Invalid phone number!"
        return;
    }
    let number = str[0] + str[1] + str[2] + "-" + str[3] + str[4] + str[5] + "-" + str[6] + str[7] + str[8] + str[9];

    history.innerHTML = number;
}

function count() {
    cc++;
    document.getElementById("count").value = `Word count: [${cc}]`;
    let count = 0;
    
    let str = document.getElementById("word").value;
    let text = document.getElementById("string").value;
    let history = document.getElementById("rofl");

    if (str == "" || text == "") {
        history.innerHTML = "Input something to count word!"
        return;
    }
    
    let arr = text.split(" ");

    for (let i = 0; i < arr.length; i++) {
        if(arr[i] == str) {
            count++;
        }
    }

    let res = "Word count: " + count;
    history.innerHTML = res;
}

function replace() {
    rc++;
    document.getElementById("replace").value = `Replace count: [${rc}]`;
    let str = document.getElementById("word").value;
    let text = document.getElementById("string").value;
    let history = document.getElementById("rofl");

    if (str == "" || text == "") {
        history.innerHTML = "Input something to count replace!"
        return;
    }
    
    let arr = text.split(" ");
    let word = str;

    for (let i = 1; i < arr.length; i++) {
        word += " " + str;
    }

    history.innerHTML = word;
}

