let img = document.getElementsByTagName('img');
let numberOf = document.getElementById('numberOf');
let infoDiv = document.getElementById('info');
let count = 0;

function load() {
    setTimeout( function() {
        for (let i = 0; i < img.length; i++) {
            visible(img[i]);
        }
    }, 500);
}

function visible(target) {
    let windowPosition = {
        top: window.pageYOffset,
        left: window.pageXOffset,
        right: window.pageXOffset + document.documentElement.clientWidth,
        bottom: window.pageYOffset + document.documentElement.clientHeight - 20
    };
    let targetPosition = {
        top: window.pageYOffset + target.getBoundingClientRect().top,
        left: window.pageXOffset + target.getBoundingClientRect().left,
        right: window.pageXOffset + target.getBoundingClientRect().right,
        bottom: window.pageYOffset + target.getBoundingClientRect().bottom
    };
    if (targetPosition.bottom > windowPosition.top && targetPosition.top < windowPosition.bottom &&
        targetPosition.right > windowPosition.left && targetPosition.left < windowPosition.right) {
        if (target.hasAttribute('data-src')) {
            target.src = target.dataset.src;
            target.removeAttribute('data-src');
            count += 1;
            numberOf.innerHTML = `${count}`;
        }
        if (count == img.length) {
            window.removeEventListener('scroll', load);
            infoDiv.style.background = '#33C35A ';
            setTimeout(() => infoDiv.remove(), 3000);
        }
    } 
    else {
        return;
    }
}

load();
window.addEventListener('scroll', load);