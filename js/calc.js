function helloDiletant () {
	alert("Hello, diletant!");
}

function Calc () {
	var  history;
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
	var newCalc = prompt('add to history');
}

var calc = new Calc();
