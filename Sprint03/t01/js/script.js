Object.assign(String.prototype, { 
    removeDuplicates() {
        let arr = this.split(' ');
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
        return str;
    }
});


//TESTING
let str = "Giant Spiders?   What’s next? Giant Snakes?";
console.log(str);// Giant Spiders?   What’s next? Giant Snakes?
str = str.removeDuplicates();
console.log(str);// Giant Spiders? What’s next? Snakes?
str= str.removeDuplicates();
console.log(str);// Giant Spiders? What’s next? Snakes?
str= ". . . . ? . . . . . . . . . . . ";
console.log(str);// . . . . ? . . . . . . . . . . .
str= str.removeDuplicates();
console.log(str);// . ?