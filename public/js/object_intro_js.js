"user strict";


(function (){


// todo:
// Create person object with firstName and lastName properties (set to your first and last name).
// var person = todo;
var person = new Object();
person.firstName = "Letty";
person.lastName = "Fuentes";


// todo:
// Add a say hello method to the person object that alerts hello using the firstName and lastName properties.
person.sayHello = function () {
	alert ("Hello " + this.firstName + " " + this.lastName + "!");	
};

// Say hello from the person object.
// person.sayHello();
person.sayHello();

})();