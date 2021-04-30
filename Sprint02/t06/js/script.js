let input = prompt("Input your name and surname trough a space");
let arr = input.split(' ');
let name = arr[0];
let surname = arr[1];

let er = 0;

for (let i = 0; i < name.length; i++) {
    if (!isNaN(name[i])) {
        er = 1;
        break;
    }
}

if (surname) {
    for (let i = 0; i < surname.length; i++) {
        if (!isNaN(surname[i])) {
            er = 1;
            break;
        }
    }
}
else {
    er = 1;
}

if(name.length == 0 || surname == null) {
    er = 1;
}

if (er == 1) {
    alert(`Wrong input!`);
    console.log(`Wrong input!`);
}
else {
    name = name[0].toUpperCase() + name.substr(1);
    surname = surname[0].toUpperCase() + surname.substr(1);
    console.log(`${name} ${surname}`);
    alert(`${name} ${surname}`);
}



