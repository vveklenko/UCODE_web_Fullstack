class Timer {
    constructor(title, delay, stopCount) {
        this.title = title;
        this.delay = delay;
        this.stopCount = stopCount;
        return this;
    }

    start = function()  {
        console.log('Timer ' + this.title + ' started (delay= ' + this.delay + ', stopCount= ' + this.stopCount + ')')
        let interval = setInterval( () => {
            this.tick();
        }, this.delay); 
        this.stop(interval, this.title);
    }

    tick = function() {
        this.stopCount--;
        console.log('Timer ' + this.title + ' Tick! | cycles left ' + this.stopCount)
    }
    
    stop = function(id, name) {
        setTimeout( () => {
            console.log('Timer ' + name + ' stopped');
            clearInterval(id);
        }, this.stopCount * this.delay);
    }
}

function runTimer(name, delay, count) {
    new Timer(name, delay, count).start();
}


//TESTING

runTimer("Bleep", 1000, 5);

/*Console output:Timer Bleep started (delay=1000,  stopCount=5)
Timer Bleep Tick! | cycles left 4
Timer Bleep Tick! | cycles left 3
Timer Bleep Tick! | cycles left 2
Timer Bleep Tick! | cycles left 1
Timer Bleep Tick! | cycles left 0
Timer Bleep stopped
*/
