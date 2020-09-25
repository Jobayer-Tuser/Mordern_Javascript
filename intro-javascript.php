<script>

// var, let, const 3 way of declare varibale in javascript

var first_name = 'Jobayer';
let last_name = 'Tuser';

// the standard way of declare variable 
//$firstName = 'Jobayer';
//first_name = 'Jobayer';
//$lastName = 'Tuser';
//last_name = 'tuser';

// CONST

const $firstName = 'Jobayer';
console.log($firstName);
//cannot reassign a value like
//$firstName = 'Jobayer';
//const greeting; 

//let see another example 

const person = {
    name: 'Jobayer',
    age: 30
}

person.name = 'Sara';
person.age = 32;
// that we can not reassign a value but can change tha value by this way
console.log(person);


const number = [1, 2, 3, 4, 5, 6, 7];
number.push(8, 9, 10);
console.log(number);



// now we will see the datatypes
// 1. Primitive type
// 2.Reference Type

//String
const name = 'John Doe';
//Number
const age = 45;
//Boolean 
const hasKids = true;
//null 
const car = null;
//undefined
let test;
//CONST
const sym = Symbol();

//Reference Type - Objects, Array, date
//Array 
const hobbies = ['movies', 'music',];
//Objects literal
console.log(hobbies);
console.log(typeof hobbies);
const address = {
    city : 'Dhaka',
    state: 'Bangladesh'
}
console.log(address);
console.log(typeof address);

const today = new Date();

console.log(today);
console.log(typeof today);



/* 
type convresion
*/
let val;

//number to string
val = String(555);
val = String(44+44);

//bool to string
val = String(true);

//date to string
val = String(new Date());

//Array to string
val = String([1, 2, 3, 4, 5]);

//toString()
val = (5).toString();
val = (true).toString();

//output
console.log(val);
console.log(typeof val);
console.log(val.length);

//string to number

val = Number('5');
val = Number(true);
val = Number(false);
val = Number(null);
val = Number('hello');
val = Number([1, 2, 3]);

val = parseInt('100.30');
val = parseFloat('100.38');

//output
console.log(val);
console.log(typeof val);
console.log(val.toFixed(4));


const val1 = String(5);
const val2 = 6;
const sum = Number(val1 + val2);

console.log(sum);
console.log(typeof val);

//Math Obejcts

val = Math.PI;
val = Math.E;
val = Math.round(2.4);
val = Math.ceil(2.4);
val = Math.floor(2.8);
val = Math.sqrt(64);
val = Math.abs(-3);
val = Math.pow(8, 2);
val = Math.min(2, 33, 4, 1, 55, 3, -2);
val = Math.max(2, 33, 4, 1, 55, 3, -2);
val = Math.random();

val = Math.floor(Math.random()*20);

console.log(val);

// String Method Concatination

const firstName = 'William';
const lastName = 'Jobayer';

let value;
//Concatination
value = firstName + ' ' + lastName;

//Append 
value = 'Jobayer ';
value += 'Tuser ';
value += 'Al Mahmud';

//Escaping
value = 'That\'s awesome , I can\'t wait';

//Length
value = firstName.length;

//concat()
value = firstName.concat(' ', lastName);

//Change case
value = firstName.toUpperCase();
value = lastName.toLowerCase();

//indexOf()
value = firstName.indexOf('l');
value = firstName.lastIndexOf('l');

//charAt()
value = firstName.charAt('2');

//Get last char
value = firstName.charAt(firstName.length -1);

//substring()
value = firstName.substring(0, 4);

//slice 
value = firstName.slice(0, 4);
value = firstName.slice(-3);

string = 'This is string and we are testing the split function';
tags = 'now we are learning, substring,slice,charAt,IndexOf,chagecase';
//split()
value = string.split(' ');
value = tags.split(',');

//replace()
value = string.replace('is', 'are');

//includes() #this return while this word stay in the string or not (true, false)
value = string.includes('food');

console.log(value);




/*
    Template literal
*/

//const Name = 'Jobayer';
//const Age 30;
//const Job = 'Web Developer';
//const City = 'Miami';

//let html = '';

//without template string/literal(es5);
/*
html = '<ul>' + 
            '<li> Name: ' + name + '</li>' +
            '<li> Age: ' + age + '</li>' +
            '<li> Job: ' + job + '</li>' +
            '<li> City: ' + city + '</li>'+
        '</ul>';
*/

//with template string/literal (es6)
function  hello(){
    return 'hello';
}
/*
html += `
        <ul>
            <li> Name : ${name} </li>
            <li> Age: ${age} </li>
            <li> Job: ${job}</li>
            <li> City: ${city} </li>
            <li> ${2 + 2} </li>
            <li> ${hello()}</li>
            <li> ${age > 30 ? 'Over 30' : 'Under 30''}</li>
        </ul>
`;
document.body.innerHtml = html;
*/

/*
Create Some Arrays
*/

const Array1 = [43, 33, 23, 55, 36, 5];
const Array2 = new Array(22, 45, 33, 76, 54);
const fruit = ['Apple', 'Banana', 'Orange', 'Pear'];
const mixed = [22, 'Hello', true, undefined, null, {a:1, b:2}, new Date()];

console.log(mixed);




/*
Objects Literal
*/

const Human = {
    firstName : 'Jobayer',
    lastName : 'Smith',
    age: 21,
    email: 'Jtuser112@gmail.com',
    hobbies: ['music', 'sports'],
    address: {
        city: 'Dhaka',
        State: 'BL',
    },
    getBirthYear: function(){
        //return 1987;
        return 2020 - this.age;
    }
}

let result;
//get specific value of array
result = Human.firstName;
result = Human['lastName'];
result = Human.age;
result = Human.hobbies;
result = Human.address;
result = Human.address.state;
result = Human.address['city'];
result = Human.getBirthYear();

console.log(result);

const people = [
    {name: 'John', age: 30},
    {name: 'Jobayer', age: 21},
    {name: 'Tasfia', age: 20}
];

for (let i = 0; i < people.length; i++){
    console.log(people[i].name);
}

</script>