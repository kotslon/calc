
function Calc () {
	var history = [];
	var lastCalc = "4-1=3";
}

Calc.prototype.showHistory = function () {
	console.log(history);
}

Calc.prototype.loadHistory = function () {
	$.ajax({
		url:"index.php?r=calc/history",
		context: this,
		success: function (result) {
			history = result;
			this.showHistory();
		},
	});
}

Calc.prototype.addToHistory = function () {
	$.ajax({
		url:"index.php?r=calc/history/add&e="+prompt("Expression?"),
		context: this,
		success: function (result) {
			console.log(result);
			this.loadHistory();
		},
	});
}


Calc.prototype.pressButton = function (x) {
	
		alert(x);
}

var calc = new Calc();



/*
function calcPress(x)
{
	 alert(x);	 
}
*/
