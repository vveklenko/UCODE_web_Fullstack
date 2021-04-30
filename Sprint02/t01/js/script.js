let num = 10;
let big = 323444545534543543664n;
let str = "Nice sprint"
let boolean = true;
let a = null;
let n;
let obj = new Object();
let symbl = Symbol('f');
let some_sunc = function f(num) {
    return num + 2;
}
alert(`num is ${typeof(num)}
BigInt is ${typeof(big)}
string is ${typeof(str)}
bool is ${typeof(boolean)}
null is ${typeof(a)}
undefined is ${typeof(n)}
object is ${typeof(obj)}
symbol is ${typeof(symbl)}
func is ${typeof(some_sunc)}
`)