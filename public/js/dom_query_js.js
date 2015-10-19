"use strict";
(function() {

    var btn1Listener = function (event)
    {
        // TODO: Set inner html of mainHeader to "JavaScript is Cool"
        // mainHeader.innerHTML = "JavaScript is Cool!";
        // console.log(mainHeader.innerHTML);

    
        // TODO: Uncomment next line and get the main header element by id
        // <h1 id="main-header">Hello World!</h1>
        var mainHeader = document.getElementById("main-header");
        // console.log(mainHeader);
        mainHeader.innerHTML = "JavaScript is Cool!";
    }
    var btn1 = document.getElementById("btn1");
    btn1.addEventListener("click", btn1Listener, false);

    
   var btn2Listener = function (event)
   {
        // TODO: Uncomment the next line and get the sub header element by id
        // <h2 id="sub-header">Hello Again.</h2>
        var subHeader = document.getElementById("sub-header");
        // console.log(subHeader);
        // TODO: Set the text color of subHeader to blue
        subHeader.style.color = "#0000FF";
   }
   var btn2 = document.getElementById("btn2");
   btn2.addEventListener("click", btn2Listener, false);
    
   var btn3Listener = function (event)
   {
        // TODO: Uncomment the next line and get all list items
        var listItems = document.getElementsByTagName("li");

        // TODO: Set text color on every other list item to grey
        for (var index = 0; index < listItems.length; index++)
        {
            if (index % 2 === 0)
            {
                listItems[index].style.color = "#808080";
            }
        } 
   }
   var btn3 = document.getElementById("btn3");
   btn3.addEventListener("click", btn3Listener, false);
   
   var btn4Listener = function (event)
    {
        var listItems = document.getElementsByTagName("li");
        // TODO: Set text color of li with dbid = 1 to blue
        for (var index = 0; index < listItems.length; index++)
        {
            //data-dbid is returning a string and with === it is not equal to the integer 1 therefore statement
            //is not true and it is not going to go the the style.color and change it to blue
            if ((listItems[index].getAttribute("data-dbid")) == 1) 
            {
                listItems[index].style.color = "#0000FF";
            }
        }    

    }
    var btn4 = document.getElementById("btn4");
    btn4.addEventListener("click", btn4Listener, false);
    
    var btn5Listener = function (event)
    {
        // TODO: Uncomment the next line and get all elements with class name sub-paragraph
        var subParagraphs = document.getElementsByClassName("sub-paragraph");
        // console.log(subParagraphs);

        // TODO: Change the text in the first sub paragraph to "Mission Accomplished!"
        subParagraphs[0].innerHTML = "Mission Accmplished!";    
    }
    var btn5 = document.getElementById("btn5");
    btn5.addEventListener("click", btn5Listener, false);
    
})();
