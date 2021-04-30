let input = prompt('Input the numbers for the beginning and end of a range like this: begin-start', '1-100');
let res_input = input.split('-');
let beginRange = res_input[0];
let endRange = res_input[1];
checkDivision(beginRange, endRange);

function checkDivision(beginRange, endRange) {
    let gay;
    for (let i = beginRange; i <= endRange; i++) {
        if (i == 0) {
            gay = "is 0"
        }
        else {
            if (i % 2 == 0) {
                gay = "is even";
                if (i % 3 == 0) {
                    gay = "is even, a multiple of 3";
                    if (i % 10 == 0) {
                        gay = "is even, a multiple of 3, a multiple of 10"
                    }
                }
                else if (i % 10 == 0){
                    gay = "is even, a multiple of 10"
                }
            }
            else {
                gay = "-";
                if (i % 3 == 0) {
                    gay = "is a multiple of 3";
                }
            }
        }
        console.log(`${i} ${gay}`);
    }
}
