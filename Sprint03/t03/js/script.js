class Human {
    constructor(firstname, lastname, gender, age, calories) {
        this.fname = firstname;
        this.lname = lastname;
        this.gender = gender;
        this.age = age;
        this.calories = calories;

        this.start = true;

        setTimeout(() => {
            if (this.calories > 500) {
                document.getElementById('state').innerHTML = "";
            }
        }, 1000)
        setInterval(() => {
                this.calories -= 200;
            
            if(this.calories < 0) {
                this.calories = 0;
            }
            
        }, 60000);
    }

    show() {
        setInterval(()=>{
            document.getElementById('name').innerHTML = this.fname;
            document.getElementById('lastname').innerHTML = this.lname;
            document.getElementById('gender').innerHTML = this.gender;
            document.getElementById('age').innerHTML = this.age;
            document.getElementById('calories').innerHTML = this.calories;
        })  

        setInterval(()=>{
            if (this.calories < 500 && this.start == true) {
                document.getElementById('state').innerHTML = "I’m hungry";
            }
        }, 5000)
    }

    feed() {
        this.start = false;
        document.getElementById('state').innerHTML = "Nom nom nom";
        setTimeout(()=>{
            document.getElementById('state').innerHTML = "";
            if (this.calories <= 500) {
                this.calories = Number.parseInt(this.calories);
                this.calories += 200;
            }
        }, 10000)

        setTimeout(() => {
            if (this.calories < 500 && this.sleep == 0) {
                document.getElementById('state').innerHTML = "I'm still hungry";
            }
        }, 3000)

        if (this.calories > 500) {
            document.getElementById('state').innerHTML = "I'm not hungry";
            setTimeout(() => { 
                document.getElementById('state').innerHTML = "";
            }, 1000)
        }
    }

    sleepFor() {
        this.start = false;
        this.sleep = prompt('Enter time of sleeping in ms');
        document.getElementById('state').innerHTML = "I'm sleeping";
        if (this.sleep > 0) {
            setTimeout(()=>{
                document.getElementById('state').innerHTML = "I'm wake up";
                setTimeout(()=>{
                    document.getElementById('state').innerHTML = "";
                    setTimeout(() => {
                        if (this.calories < 500) {
                            document.getElementById('state').innerHTML = "I am still hungry";
                        }
                    }, 1000)
                },1000)
            }, this.sleep)  
        } 
    }

    superhero() {
        if (this.calories < 500) {
           document.getElementById('state').innerHTML = "I'm still hungry";
        }
        else {
            document.getElementsByTagName("img")[0].setAttribute("src","./assets/img/new.jpeg");
            document.getElementById("fly").style.display = "inline-block";
            document.getElementById("fight").style.display = "inline-block";
            document.getElementById("turn").style.display = "none";
        }
    }
}

class Superhero extends Human {
    fly() {
        document.getElementById('state').innerHTML = "I'm flying";
        setTimeout(()=>{
            document.getElementById('state').innerHTML = "";
        }, 10000)  
    }

    fightWithEvil() {
        document.getElementById('state').innerHTML = "Khhhh-chh... Bang-g-g-g... Evil is defeated!";
        setTimeout(()=>{
            document.getElementById('state').innerHTML = "";
        }, 5000)  
    }
}

let human = new Human(prompt('Enter first name','Alohadance'), prompt('Enter last name','Korobkyn'),
prompt('Enter gender','Male'), prompt('Enter age','23'), prompt('Enter calories','300'));
human.show();
let superhero = new Superhero();
