function addWords(obj, wrds) {
    let str = obj['words'];
    str += ' ' + wrds;

    let arr = str.split(' ');
   
    for(let i = 0; i < arr.length; i++) {
        for (let j = i + 1; j < arr.length; j++) {
            if (arr[i] == arr[j]) {
                arr[j] = '';
            }
        }
    }
   
    let size = 0;

    for(let i = 0; i < arr.length; i++) {
        if (arr[i] != '') {
            size++;
            if (size == 1) {
                str = arr[i];
            } 
            else {
                str += ' ' + arr[i];
            }
        }
    }

    obj['words'] = str;
}

function removeWords(obj, wrds) {
    let str = obj['words'];
    let arr = str.split(' ');

    word = wrds.split(' ');
    let wrds_size = 0;

    for (let i = 0; i < word.length; i++) {
        if(word[i] != '') {
            wrds_size++;
            if (wrds_size == 1) {
                wrds = word[i];
            } 
            else {
                wrds += ' ' + word[i];
            }
        }
    }

   word = wrds.split(' ');

   for (let j = 0; j < word.length; j++) {
        for(let i = 0; i < arr.length; i++) {
            if (word[j] == arr[i]) {
                arr[i] = '';
            }
        }
    
    }

    let size = 0;

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] != '') {
            size++;
            if (size == 1) {
                wrds = arr[i]
            }
            else {
                wrds += ' ' + arr[i];
            }
        }
    }

    obj['words'] = wrds;
}

function changeWords(obj, oldWrds, newWrds) {
    let str = obj['words'];
    let arr = str.split(' ');

    word = oldWrds.split(' ');
    let oldWrds_size = 0;

    for (let i = 0; i < word.length; i++) {
        if(word[i] != '') {
            oldWrds_size++;
            if (oldWrds_size == 1) {
                oldWrds = word[i];
            } 
            else {
                oldWrds += ' ' + word[i];
            }
        }
    }

   word = oldWrds.split(' ');

   for (let j = 0; j < word.length; j++) {
        for(let i = 0; i < arr.length; i++) {
            if (word[j] == arr[i]) {
                arr[i] = newWrds;
            }
        }
    }

    for(let i = 0; i < arr.length; i++) {
        for (let j = i + 1; j < arr.length; j++) {
            if (arr[i] == arr[j]) {
                arr[j] = '';
            }
        }
    }

    let size = 0;

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] != '') {
            size++;
            if (size == 1) {
                oldWrds = arr[i]
            }
            else {
                oldWrds += ' ' + arr[i];
            }
        }
    }

    obj['words'] = oldWrds;
}
