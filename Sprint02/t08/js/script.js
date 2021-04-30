function checkBrackets(str) {
    if(typeof(str) != 'string') {
        return -1;
    }

    let size = 0;
    let brackets = [];

    for(let i = 0; i < str.length; i++) {
        if(str[i] == ')' || str[i] == '(') {
            brackets[size] = str[i];
            size++;
        }
    }

    if(size == 0){
        return -1;
    }
    
    while(1) {
        let check = 0;
        let temp = size;
        for(i = 0; i < temp; i++){
            if(brackets[i] == ')' && brackets[i - 1]) {
                if (brackets[i - 1] == '(') {
                    brackets[i] = 0;
                    brackets[i - 1] = 0;
                    size -= 2;
                    check += 1;
                }
            }
        }
        size = 0;
        for(i = 0; i < temp; i++){
            if(brackets[i] == ')' || brackets[i] == '(') {
                brackets[size] = brackets[i];
                size++;
            }
        }
        if (check == 0) {
            return size;
        }
    }
}