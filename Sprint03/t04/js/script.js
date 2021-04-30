houseMixin =  {
    wordReplace(str1, str2) {
        this.description = this.description.replace(str1, str2);
    },

    wordDelete(str1) {
        this.description = this.description.replace(str1, '');
    },

    wordInsertAfter(str1, str2) {
        this.description = this.description.replace(str1, str1 + ' ' + str2);
    },

    wordEncrypt() {
        function rot13(str) {
            return str.replace(/[a-zA-Z]/g, function(chr) {
              var start = chr <= 'Z' ? 65 : 97;
              return String.fromCharCode(start + (chr.charCodeAt(0) - start + 13) % 26);
            });
        }

        let str2 = this.description;
        str2 = rot13(str2);

        this.description = this.description.replace(this.description, str2);
    },

    wordDecrypt() {
       this.wordEncrypt();
    }
}

//TESTING

/*
const house = new HouseBuilder('88 Crescent Avenue' ,
                                    'Spacious town house with wood flooring, 2-car garage, and a back patio.',
                                         'J. Smith', 110, 5);



Object.assign(house, houseMixin);

console.log(house.getDaysToBuild());// 220
console.log(house.description);// Spacious town house with wood flooring, 2-car garage, and a back patio.

house.wordReplace("wood", "tile");
console.log(house.description);// Spacious town house with tile flooring, 2-car garage, and a back patio.

house.wordDelete("town ");
console.log(house.description);// Spacious house with tile flooring, 2-car garage, and a back patio.

house.wordInsertAfter("with", "marble");
console.log(house.description);// Spacious house with marble tile flooring, 2-car garage, and a back patio.

house.wordEncrypt();
console.log(house.description);// Fcnpvbhf ubhfr jvgu zneoyr gvyr sybbevat, 2-pne tnentr, naq n onpx cngvb.

house.wordDecrypt();
console.log(house.description);// Spacious house with marble tile flooring, 2-car garage, and a back patio
*/