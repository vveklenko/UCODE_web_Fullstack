var squads = document.getElementsByClassName('squads');

for (let index = 0; index < squads.length; index++) {
    squads[index].ondblclick = () => {
        if (squads[index].style.border == "4px dashed black") {
            squads[index].style.border = "none";
        }
        else {
            squads[index].style.border = "none";
            squads[index].style.border = "4px dashed black";
        }
    }
}

for (let index = 0; index < squads.length; index++) {
    squads[index].onmousedown = (elem) => {
        function moveAt(elem) {
            squads[index].style.left = elem.pageX - squads[index].offsetWidth / 2 + 'px';
            squads[index].style.top = elem.pageY - squads[index].offsetHeight / 2 + 'px';
        }

        document.onmousemove = function(elem) {
            moveAt(elem);
        }
        
        squads[index].onmouseup = function() {
            document.onmousemove = null;
            squads[index].onmouseup = null; 
        }

        if (squads[index].style.border == "4px dashed black") {
            document.onmousemove = null;
            squads[index].onmouseup = null;
        }
    }
}

