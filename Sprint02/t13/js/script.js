function Calculator() {
    this.result = 0;

    this.init = function(c) {
        this.result = c;
        return this;
    }
    
    this.add = function(c) {
        this.result += c;
        return this;
    }
    
    this.mul = function(c) {
        this.result *= c;
        return this;
    }
    
    this.div = function(c) {
        this.result /= c;
        return this;
    }
    
    this.sub = function(c) {
        this.result -= c;
        return this;
    }

    this.alert = () => {
        setTimeout(() => alert(this.result), 5000);
        return this;
    }
}

