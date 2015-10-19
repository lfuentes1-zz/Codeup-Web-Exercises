"use strict";

(function (){

	var left_operand = document.getElementById("left_operand");
	var right_operand = document.getElementById("right_operand");
	var operand = document.getElementById("operand");
	var equals = document.getElementById("equals");
	var clear = document.getElementById("clear");
	var number_button = document.getElementsByClassName("num_btn");	
	var operand_button = document.getElementsByClassName("operator_btn");
	
	var determineValue = function (event)
	{
		if (operand.value == "")
		{
			left_operand.value += (this.getAttribute("data-value"));
		}
		else
		{		
			right_operand.value += (this.getAttribute("data-value"));
		}
	}
	//only add class in javascript if you want to change the look after the page loads
	// document.getElementById("clear").className = "btn clear_btn";

	// var number = button[0].getAttribute("data-value");
	// loop through number
	var calculateTotal = function (event)
	{
		var Total = 0;
		var left_side;
		var right_side;
		var flag = false;

		for (var i = 0; i < left_operand.value.length; i++)
		{
			if (left_operand.value[i] == ".")
			{
				left_side = parseFloat(left_operand.value);
				flag = true;
				break;
			}
		}
		if (flag == false)
		{
			left_side = parseInt(left_operand.value)			
		}

		flag = false;
		for (var i = 0; i < right_operand.value.length; i++)
		{
			if (right_operand.value[i] == ".")
			{
				right_side = parseFloat(right_operand.value);
				flag = true;
				break;
			}
		}
		if (flag == false)
		{
			right_side = parseInt(right_operand.value)			
		}

		switch (operand.value)
		{
			case "+": Total = left_side + right_side;
			left_operand.value = Total;
			right_operand.value = "";
			break;

			case "-": Total = left_side - right_side;
			left_operand.value = Total;
			right_operand.value = "";
			break;

			case "*": Total = left_side * right_side;
			left_operand.value = Total;
			right_operand.value = "";
			break;

			case "/": Total = left_side / right_side;
			left_operand.value = Total;
			right_operand.value = "";
			break;
		}
	}

	for (var i = 0; i < number_button.length; i++)
	{
		number_button[i].addEventListener("click", determineValue, false);
	}

	for (var i = 0; i < operand_button.length; i++)
	{
		operand_button[i].addEventListener("click", function () {
			operand.value = (this.getAttribute("data-value"));
		}, false);

		equals.addEventListener("click", calculateTotal, false);

		clear.addEventListener("click", function (){
			left_operand.value = "";
			right_operand.value = "";
			operand.value = "";
		}, false);
	}

})();

// var clear = function (event) {
// 	location.reload(true); 
// 	to reload the page and clear the results
// }


