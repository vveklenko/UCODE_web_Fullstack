function concat(string1, string2) {
    let count = 0;
    if (string2 == undefined) {
        return function callback() {
            count += 1;
            callback.count = count;
            return string1 + ' ' + prompt();
        }
    }
    else {
        let str = string1 + ' ' + string2;
        return str;
    }
}