setInterval( () => {
    slide(1);
}, 3000)

function slide(n) {
    if (n == 1) {
        switch (index) {
            case 0:
                document.getElementsByTagName("img")[0].setAttribute("src","./img/pic2.jpeg");
                break;
        
            case 1:
                document.getElementsByTagName("img")[0].setAttribute("src","./img/pic3.jpeg");
                break;

            case 2:
                document.getElementsByTagName("img")[0].setAttribute("src","./img/pic1.jpeg");
        }
    }
    else {
        switch (index) {
            case 0:
                document.getElementsByTagName("img")[0].setAttribute("src","./img/pic3.jpeg");
                break;
        
            case 1:
                document.getElementsByTagName("img")[0].setAttribute("src","./img/pic2.jpeg");
                break;

            case 2:
                document.getElementsByTagName("img")[0].setAttribute("src","./img/pic1.jpeg");
        }
    }
    index += 1;
    if (index == 3) {
        index = 0;
    }
}

let index = 0;