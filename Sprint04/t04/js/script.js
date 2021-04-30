function insidious() {
    document.getElementById("film1").style.borderLeft = "5px solid rgb(19, 127, 222)";
    document.getElementById("film1").style.width = "calc(90% - 5px)";
    document.getElementById("film2").style.borderLeft = "none";
    document.getElementById("film3").style.borderLeft = "none";
    document.getElementById("name").innerHTML = "Insidious";
    document.getElementById("date").innerHTML = "September 14, 2010";
    document.getElementById("actor1").innerHTML = "Patrick Wilson";
    document.getElementById("actor2").innerHTML = "Rose Byrne";
    document.getElementById("actor1").style.backgroundColor = "rgb(19, 127, 222)";
    document.getElementById("actor2").style.backgroundColor = "rgb(19, 127, 222)";
    document.getElementById("actor3").style.backgroundColor = "rgb(19, 127, 222)";
    document.getElementById("actor3").style.display = "inline-block";
    document.getElementById("actor3").innerHTML = "Barbara Hershey";
    document.getElementById("description").innerHTML = " A gripping story of a family in search of help for their son, Dalton, who fell into a coma after a mysterious incident in the attic. Little do they know that there is much more to this endless sleep than meets the eye as they explore the paranormal, and rediscover the past; the key to getting their son back once and for all.";
    document.getElementsByTagName("img")[0].setAttribute("src","./img/Insidious.jpeg");
    document.getElementById("list").style.bottom = "183px";
}

function it() {
    document.getElementById("film2").style.borderLeft = "5px solid rgb(199, 6, 6)";
    document.getElementById("film2").style.width = "calc(90% - 5px)";
    document.getElementById("film1").style.borderLeft = "none";
    document.getElementById("film3").style.borderLeft = "none";
    document.getElementById("name").innerHTML = "IT";
    document.getElementById("date").innerHTML = "September 5, 2017";
    document.getElementById("actor1").innerHTML = "Bill Skarsgård";
    document.getElementById("actor2").innerHTML = "Jaeden Lieberher";
    document.getElementById("actor1").style.backgroundColor = "rgb(199, 6, 6)";
    document.getElementById("actor2").style.backgroundColor = "rgb(199, 6, 6)";
    document.getElementById("actor3").style.backgroundColor = "rgb(199, 6, 6)";
    document.getElementById("actor3").style.display = "none";
    document.getElementById("description").innerHTML = "In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.";
    document.getElementsByTagName("img")[0].setAttribute("src","./img/it.jpeg");
    document.getElementById("list").style.bottom = "114px";
}

function invisible() {
    document.getElementById("film3").style.borderLeft = "5px solid purple";
    document.getElementById("film3").style.width = "calc(90% - 5px)";
    document.getElementById("film2").style.borderLeft = "none";
    document.getElementById("film1").style.borderLeft = "none";
    document.getElementById("name").innerHTML = "The Invisible Man";
    document.getElementById("date").innerHTML = "February 28, 2020";
    document.getElementById("actor1").innerHTML = "Elisabeth Moss";
    document.getElementById("actor2").innerHTML = "Aldis Hodge";
    document.getElementById("actor3").innerHTML = "Storm Reid";
    document.getElementById("actor3").style.display = "inline-block";
    document.getElementById("description").innerHTML = "When Cecilia's abusive ex takes his own life and leaves her his fortune, she suspects his death was a hoax. As a series of coincidences turn lethal, Cecilia works to prove that she is being hunted by someone nobody can see.";
    document.getElementsByTagName("img")[0].setAttribute("src","./img/invisible.jpeg");
    document.getElementById("list").style.bottom = "137px";
    document.getElementById("actor1").style.backgroundColor = "purple";
    document.getElementById("actor2").style.backgroundColor = "purple";
    document.getElementById("actor3").style.backgroundColor = "purple";
}


