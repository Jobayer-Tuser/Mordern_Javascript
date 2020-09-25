<body>
Javascript Sandbox : section 2
</body>

<script>
// function declaration

function greet(firstName = 'Jobayer', lastName = 'Tuser'){
    
    /* this is pattern of old javascript
    
    if(typeof firstName === 'undefined'){
        firstName = 'John';
    }
    if(typeof lastName === 'undefined'){
        lastName = 'Doe';
    }*/
    
   // console.log('Hello');
    return 'Hello ' + firstName + ' ' + lastName;
}
console.log(greet('Halima', 'Sadia'));

//function expression

const square = function(x = 4){
    return x*x;
}

console.log(square(8));

// IMMIDIATELY INVOCABLE FUNCTION EXPRESSION -> IIFES

(function(){
    console.log('IIfE...');
})();

(function(name){
    console.log('IIfE... ' + name );
})('Brad');

//PROPERTY METHODS

const todo = {
    add: function(){
        console.log('Add todo...');
    },
    edit: function(id){
        console.log(`Edit todo ${id}`);
    }
}

todo.delete = function(){
    console.log('Delete todo...');
}

todo.add();
todo.edit(22);
todo.delete();


</script>
