
function Operand(){
	var DEC_POS = 5; // decimal positions
	var _value;
	var _string;
	var _empty;
	
	this.getValue = function () {
		return _value;
	}
	
	this.getString = function () {
		return _string;
	}
	
	this.setValue = function (v) {
		_value = v;
		_string = _value.toFixed(DEC_POS);
		_empty = false;
		this.show();
		return _value;
	}
	
	this.setString = function (s) {
		_string = s;
		_value = parseFloat(_string);
		_empty = false;
		this.show();
		return _string;
	}
	
	this.show = function () {
		$('#output').html(_string);
	}
	
	this.isEmpty = function () {
		return _empty;
	}	
	
	this.init = function () {
		_value = 0
		_string ='';
		_empty = true;
		$('#output').html('0');
	}
	
	this.init()
}

Operand.prototype.appendDigit = function (digit) {
	this.setValue(this.getValue()*10+digit);
}

Operand.prototype.appendDot = function () {
	
}

Operand.prototype.negate = function () {
	
}

Operand.prototype.backspace = function () {
	
}


function Calc (hgl, hal) {

	var MAX_DIGITS = 10;
	var OP_COMPLETE = -2;
	var OP_NONE = -1;
	var OP_PLUS = 0;
	var OP_MINUS = 1;
	var OP_MUL = 2;
	var OP_DIV = 3;
	var FIRST_OP = 0;
	var SECOND_OP  = 1;
	
	var history = [];
	var last_calc = "";
	var op1;  // 1st operand
	var op2;  // 2nd operand
	var cur_op;  // reading 1st operand 
	var op;  // operation
	var result;

	var history_get_link = hgl;
	var history_add_link = hal;
	
	this.reset = function () {
		cur_op = FIRST_OP;
		op1 = new Operand();
		op2 = new Operand();
		op = OP_NONE;
		result = 0;
	}

	this.showHistory = function () {
		var his  = '<h5 style="text-align: center">HISTORY</h5></div>';
		for (h in history) {
			his += history[h].text + '<br />'; 
		}
		$('#historyArea').html(his);
	}
	
	this.loadHistory = function () {
		$.ajax({
			url: history_get_link,
			context: this,
			success: function (result) {
				history = result;
				this.showHistory();
			},
		});
	}
	
	this.addToHistory = function () {
		$.ajax({
			url: history_add_link,
			data: {e : last_calc},// :prompt('Expression?')},
			type: 'POST',
			dataType: 'json',
			context: this,
			success: function (result) {
				this.loadHistory();
			},
		});
	}
	
	this.inputDigit = function (digit) {
		switch (cur_op){
			case FIRST_OP: op1.appendDigit(digit); break;
			case SECOND_OP: op2.appendDigit(digit);break;
		}
	}
	
	this.doMath = function () {
		if (cur_op === SECOND_OP && !op2.isEmpty()){
			var op_s = '';
			switch (op) {
				case OP_PLUS: result = op1.getValue() + op2.getValue(); op_s='+'; break;
				case OP_MINUS: result = op1.getValue() - op2.getValue(); op_s='-';break;
				case OP_MUL: result = op1.getValue() * op2.getValue(); op_s='*';break;
				case OP_DIV: result = op1.getValue() / op2.getValue(); op_s='/';break;
			}
			var res = result;
			last_calc = op1.getString()+' '+op_s+' '+op2.getString()+' = '+res;
			this.reset();
			op1 = new Operand;
			op1.setValue(res);
			cur_op = FIRST_OP;
			op = OP_COMPLETE;
			console.log(last_calc);
			//addToHistory
		}
	}
	
	this.inputDot = function () {
		switch (cur_op){
		case FIRST_OP: op1.appendDot();break;
		case SECOND_OP: op2.appendDot();break;
		}
	}
	
	this.inputNeg = function () {
		switch (cur_op){
		case FIRST_OP: op1.negate();break;
		case SECOND_OP: op2.negate();break;
		}
	}
	
	this.backspace = function () {
		switch (cur_op){
		case FIRST_OP: op1.backspace();break;
		case SECOND_OP: op2.backspace();break;
		}
	}
	
	this.inputOp = function (operation) {
		this.doMath();
		switch (cur_op){
			case FIRST_OP:
				if (!op1.isEmpty()){
					cur_op = SECOND_OP;
					op = operation;
				}
			break;
			case SECOND_OP:
				if (op2.isEmpty()){
				    op = operation;
				}
			break;
		}
	}
	
	this.pressButton = function (x) {
		switch  (x) {
			case 'btn00': this.inputDigit(0); this.inputDigit(0); break;
			case 'btn0': this.inputDigit(0); break;
			case 'btn1': this.inputDigit(1); break;
			case 'btn2': this.inputDigit(2); break;
			case 'btn3': this.inputDigit(3); break;
			case 'btn4': this.inputDigit(4); break;
			case 'btn5': this.inputDigit(5); break;
			case 'btn6': this.inputDigit(6); break;
			case 'btn7': this.inputDigit(7); break;
			case 'btn8': this.inputDigit(8); break;
			case 'btn9': this.inputDigit(9); break;
			case 'btnDot': this.inputDot(); break;
			case 'btnEq': this.doMath(); break;
			case 'btnPlus': this.inputOp(OP_PLUS); break;
			case 'btnMinus': this.inputOp(OP_MINUS); break;
			case 'btnMul': this.inputOp(OP_MUL); break;
			case 'btnDiv': this.inputOp(OP_DIV); break;
			case 'btnNeg': this.inputNeg(); break;
			case 'btnC': this.reset(); break;
			case 'btnBcsp': this.backspace(); break;
		};
			//alert(x);
	}
	
	this.log = function () {
		console.log("op1 === "+op1.getValue());
		console.log("op === "+op);
		console.log("op2 === "+op2.getValue());
		console.log("result === "+result);
	}

	this.reset();
} // Calc constructor


var calc;
