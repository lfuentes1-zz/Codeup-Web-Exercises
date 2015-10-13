"use strict";

(function (){

	var left_operand = document.getElementById("left_operand");
	var right_operand = document.getElementById("right_operand");
	var operand = document.getElementById("operand");
	var equals = document.getElementById("equals");
	var clear = document.getElementById("clear");
	
	function startListening ()
	{
		var number_button = document.getElementsByClassName("num_btn");	
		var operand_button = document.getElementsByClassName("operator_btn");
		// var number = button[0].getAttribute("data-value");
		// loop through number
		for (var i = 0; i < number_button.length; i++)
		{
			number_button[i].addEventListener("click", function(){

			if (operand.value == "")
			{
				left_operand.value += (this.getAttribute("data-value"));
			}
			else
			{		
				right_operand.value += (this.getAttribute("data-value"));
			}

			}, false);
		}

		for (var i = 0; i < operand_button.length; i++)
		{
			operand_button[i].addEventListener("click", function(){
				

				 	operand.value = (this.getAttribute("data-value"));
			
			} ,false);
		}

		equals.addEventListener("click", function(){

			var calculateTotal = 0;

			switch (operand.value)
			{
				case "+": calculateTotal = (parseInt(left_operand.value,10) + parseInt(right_operand.value,10));
				left_operand.value = calculateTotal;
				right_operand.value = "";
				break;

				case "-": calculateTotal = (parseInt(left_operand.value,10) - parseInt(right_operand.value,10));
				left_operand.value = calculateTotal;
				right_operand.value = "";
				break;

				case "*": calculateTotal = (parseInt(left_operand.value,10) * parseInt(right_operand.value,10));
				left_operand.value = calculateTotal;
				right_operand.value = "";
				break;

				case "/": calculateTotal = (parseInt(left_operand.value,10) / parseInt(right_operand.value,10));
				left_operand.value = calculateTotal;
				right_operand.value = "";
				break;
				}
			}, false);

		clear.addEventListener("click", function (){

			left_operand.value = "";
			right_operand.value = "";
			operand.value = "";

		}, false);
	
	}

	
startListening ();
	
})();


