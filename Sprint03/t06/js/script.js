function* generator() {
    let start = 1;
    while (1) {
        calls = prompt('Previous result was ' + start + '. Enter a new number');
        if(isNaN(calls)) {
            console.error('Invalid number');
            yield calls;
        }
        calls = parseInt(calls);
        if(isNaN(calls) || calls == undefined || calls == '') {
            console.error('Invalid number');
            yield calls;
        }
        else {
            if (calls > 10000) {
                start = 1;
            }
            else {
                start += calls;
            }
        }
    }
}

let gen = generator();
gen.next().value;
