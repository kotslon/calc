
function Calc (hgl, hal) {
	var history = [];
	var lastCalc = "4-1=3";
	this.history_get_link = hgl;
	this.history_add_link = hal;
}

Calc.prototype.showHistory = function () {
	console.log(history);
}

Calc.prototype.loadHistory = function () {
	console.log(this);
	$.ajax({
		url: this.history_get_link,
		context: this,
		success: function (result) {
			history = result;
			this.showHistory();
		},
	});
}

Calc.prototype.addToHistory = function () {
	$.ajax({
		url: this.history_add_link+"&e="+prompt("Expression?"),
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
