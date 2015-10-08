"use script";


(function ()
{
// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

var books = [{
	title: "One",
	author: {
		firstName: "FirstOne",
		lastName: "LastOne"
	}
}, {
	title: "Two",
	author: {
		firstName: "FirstTwo",
		lastName: "LastTwo"
	}
},	{
	title: "Three",
	author: {
		firstName: "FirstThree",
		lastName: "LastThree"
	}
},	{
	title: "Four",
	author: {
		firstName: "FirstFour",
		lastName: "LastFour"
	}
},	{
	title: "Five",
	author: {
		firstName: "FirstFive",
		lastName: "LastFive"
	}
}];

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
	books.forEach(function (element, index, array) //don't need the 3rd parameter array unless it is going to be referenced
		//call element (1st parameter) a book, the generic names are lame, array is the entire array
	{
		//paranthesis around the index forces order of operations so index is not concatenated to the string until it is calculated
		console.log ("Book #: " + (index + 1));
		console.log ("Title: " + books[index].title);	
		// console.log ("Title: " + element.title);	
		console.log ("Author: " + books[index].author.firstName + " " + books[index].author.lastName);
		// console.log ("Author: " + element.author.firstName + " " + element.author.lastName);
		console.log	("-----");
	});
// end loop here

})();