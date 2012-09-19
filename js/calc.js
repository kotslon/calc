
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
		url:"index.php?r=calc/history/add",
		context: this,
		success: function (result) {
			console.log(result);
			this.loadHistory();
		},
	});
}

var calc = new Calc();
