let coinCollection = new Set()
coinCollection.add('Ignat')
    .add('Jesica')
    .add('Andrew')
    .add('Sofi')
    .add('Mary');
console.log(coinCollection);
coinCollection.delete('Andrew');
console.log(coinCollection);
for (let value of coinCollection) {
    console.log(value);  
}
console.log(coinCollection.size);
console.log(coinCollection.has('Mary'));
coinCollection.clear();



let guestList = new WeakSet();
let Ignat = {name: 'Ignat'};
let Jesica = {name: 'Jesica'};
let Andrew = {name: 'Andrew'};
let Sofi = {name: 'Sofi'};
let Mary = {name: 'Mary'};
guestList.add(Ignat)
    .add(Jesica)
    .add(Andrew)
    .add(Sofi)
    .add(Mary);
console.log(guestList);
guestList.delete(Ignat);
console.log(guestList);
console.log(guestList.has(Mary));



let menu = new Map()
menu.set(500,"soup")
    .set(200,"meat")
    .set(300,"salat")
    .set(600,"pizza")
    .set(100,"sandwich");
console.log(menu);
menu.delete(500);
console.log(menu);
for (let key of menu.keys()) {
    console.log(key);  
}
for (let value of menu.values()) {
    console.log(value);  
}
console.log(menu.size);
console.log(menu.get(100));
menu.clear();
console.log(menu);



let bankVault = new WeakMap()
let key1 = { name: '1'};
let key2 = { name: '2'};
let key3 = { name: '3'};
let key4 = { name: '4'};
let key5 = { name: '5'};

bankVault.set(key1,"some information obout key1")
    .set(key2,"some information obout key2")
    .set(key3,"some information obout key3")
    .set(key4,"some information obout key4")
    .set(key5,"some information obout key5");
console.log(bankVault);
bankVault.delete(key2);
console.log(bankVault);
console.log(bankVault.get(key4));
