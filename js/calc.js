
function Calc (hgl, hal) {
	var history = [];
	var lastCalc = "4-1=3";

	var expr = "";
	var log = "";
	var flag = false;
	
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
		}
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
		}
	});
}

Calc.prototype.pressButton = function (x) {
		alert(x);
}

Calc.prototype.Operand = function (x) {
	if(this.flag) {
		this.expr = "";
		this.flag = false;
	}
	if(!this.expr) {
		this.expr = "";
	}
	if(!this.log) {
		this.log = "";
	}
	this.expr += x;
	this.log += x;
	$('#expr').html(this.expr);
	$('#log').html(this.log);
	if(this.log) {
		$('#log').show();
	}
}

Calc.prototype.Operator = function (x) {
	if(this.expr && !this.flag) {
		this.log = eval(this.log);
		this.log += x;
		this.flag = true;
		$('#expr').html(this.expr);
		$('#log').html(this.log);
		if(this.log) {
			$('#log').show();
		}
	}
}
Calc.prototype.Equal = function () {
	if(this.expr && !this.flag) {
		this.expr = eval(this.log);
		this.log = this.expr;
		//this.flag = true;
		$('#expr').html(this.expr);
		$('#log').hide();
	}
}

Calc.prototype.Back = function () {
	if(this.expr) {
		this.expr = this.expr.toString().substr(0,this.expr.toString().length-1);
		this.log = this.expr;
		//this.flag = true;
		$('#expr').html(this.expr);
		$('#log').hide();
	}
}

Calc.prototype.Clear = function () {
	this.expr = "";
	this.log = "";
	this.flag = false;
	$('#expr').html(0);
	$('#expr').html("");
	$('#log').hide();
}

Calc.prototype.Neg = function () {
	this.expr = "";
	this.log = "";
	this.flag = false;
	$('#expr').html(0);
	$('#expr').html("Stack overflow!");
	$('#log').hide();
}

var calc;
