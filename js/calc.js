
function Calc (hgl, hal) {
	var history = [];
	var lastCalc = "4-1=3";
	this.history_get_link = hgl;
	this.history_add_link = hal;
}

Calc.prototype.showHistory = function () {
	console.log(history);
	var his  = '<h5 style="text-align: center">HISTORY</h5></div>';
	for (h in history) {
		his += history[h].text + '<br />'; 
	}
	$('#historyArea').html(his);
	console.log(his);
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
		url: this.history_add_link,
		data: {e :prompt('Expression?')},
		type: 'POST',
		dataType: 'json',
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
