/*let val;
val = document;// show all html code in console
val = document.all; //show all tag as array
val = document.all[2];
val = document.all.length;
val = document.head;
val = document.body;
val = document.doctype;
val = document.domain;
val = document.url;
val = document.characterSet;
val = document.contentType;

val = document.forms;
val = document.forms[0];
val = document.forms[0].id;
val = document.forms[0].className;
val = document.forms[0].classList[0];

val = document.images;

val = document.scripts;
val = document.scripts[2].getAttribute('src');

console.log(val);


let scripts = document.scripts;

let scriptsArr = Array.from(scripts);

scriptsArr.forEach(function(scripts){
	console.log(scripts);
})

scriptsArr.forEach(function(scripts){
	console.log(scripts.getAttribute('src'));
})


//selector DOM Manupulation
//document.getElementById();
console.log(document.getElementById('task-title'));

//Get thing form the elementFromPoint
console.log(document.getElementById('task-title').id);
console.log(document.getElementById('task-title').className);

//we can declare the document.getElementById('task-title'); ID another way by putting in a variable
const taskTitleId = document.getElementById('task-title');

//Change styling
taskTitleId.style.background = '#333';
taskTitleId.style.color = '#fff';
taskTitleId.padding = '10px';

//Change contentType
taskTitleId.textContent = 'Task List';
taskTitleId.innerText = 'My Task';
taskTitleId.innerHTML = '<span style="color: red"> Task List</span>';

//document.querySelector(); single element selector

console.log(document.querySelector('#task-title'));
console.log(document.querySelector('.card-content'));
console.log(document.querySelector('h4'));

document.querySelector('li').style.color = 'red';
document.querySelector('ul li').style.color = 'blue';
document.querySelector('li:last-child').style.color = 'green';
document.querySelector('li:nth-child(3)').style.color = 'yellow';
document.querySelector('li:nth-child(2)').textContent = 'Change it';
document.querySelector('li:nth-child(odd)').style.background = '#ccc';
document.querySelector('li:nth-child(even)').style.background = '#f4f4f4';

//document.getElementByClassName();

const items = document.getElementsByClassName('collection-item');

console.log(items);
console.log(items[0]);
console.log(items[1]);

items[0].style.color = 'red';
items[1].style.color = 'Blue';
items[2].style.fontSize = '30px';
items[2].style.fontWeight = 'bold';
items[3].style.padding = '20px'

items[3].textContent = 'Hello';

//document.getElementsByTagName();

let list = document.getElementsByTagName('li');

console.log(list);
console.log(list[0]);
list[0].style.color = 'red';
list[0].textContent = 'Hello';

// Convert Html Collection into array
list = Array.from(list);

list.reverse();

list.forEach(function(li, index){
	console.log(li.className);
	li.textContent = `${index}: hello`
});

console.log(list);  



//document.querySelectorAll('');

const items = document.querySelectorAll('ul collection li.collection-item');

items.forEach(function(items, index){
	item.textContent = `${index}: Hello`;
});

const liOdd = document.querySelectorAll('li:nth-child(odd)');
const liEven = document.querySelectorAll('li:nth-child(even)');

liOdd.forEach(function(li, index){
	li.style.background = '#ccc';
})

for(let i = 0; i < liEven.length; i++){
	liEven[i].style.background = '#f4f4f4';
}



let val ;

const list = document.querySelector('ul.collection');
const listItem = document.querySelector('li.collection-item:first-child');

val = list;
val = listItem;

//Get child nodes 
//it resturn the nodelist
val = list.childNodes;
val = list.childNodes[0];
val = list.childNodes[0].nodeName;
val = list.childNodes[3].nodeType;

// 1 - Element
// 2 - Attribute(deprecated)
// 3 - Text Node
// 8 - Comment
// 9 - Document itself
// 10 - Doctype

//Get children element nodes 
//it return the only html element 
val = list.children;
val = list.children[1];
list.children[1].textContent = 'Hello';
//list.children[3].textContent = 'How Are you';

//Children of children
list.children[3].children[0].id = 'test-link';
val = list.children[3].children[0];

//first child
val = list.firstChild;
val = list.firstElementChild;

//Last Element child
val = list.lastChild;
val = list.lastElementChild;

//Count child Elements
val = list.childElementCount;

//Get parent Node
val = listItem.parentNode;
val = listItem.parentElement;
val = listItem.parentElement.parentElement;

//Get Next Sibling 
val = listItem.nextSiblingl;
val = listItem.nextElementSibling.nextElementSibling.previousElementSibling

//get prev Sibling
val = listItem.previousSibling;
val = listItem.previousElementSibling;



var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

var today =  month  + "/" + day + "/" + year;       
document.getElementById("theDate").value = today;

*/

$(function() {
   $( "#datepicker" ).datepicker();
});



//console.log(today);
