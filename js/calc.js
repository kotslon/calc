function Logger(){
	var on = true;
	this.s =  function(s){
		if (on) {
			console.log(s);
		}
	}
}

var LOG = new Logger;

function Calc(hgl,hal) {
	
	var BTNS_OP = ['btnPlus','btnMinus','btnMul','btnDiv'];  // buttons for operations
	var BTNS_ED = ['btn0','btn1','btn2','btn3','btn4','btn5','btn6','btn7','btn8','btn9',
	               'btn00','btnDot','btnBcsp','btnNeg'];  // buttons for editing
	var MAX_DIGITS = 20;
	var MAX_DEC = 8;
	
	function Operand() {
		var _string = '0';
		
		this.getString = function () {
			return _string;
		}
		
		this.getValue = function () {
			return parseFloat(_string);
		}
		
		this.setValue = function (v) {
			var p = Math.pow(10,MAX_DEC);
			LOG.s('setting value: '+v);
			v = Math.round(v*p)/p;
			LOG.s('rounded value: '+v);
			_string = v.toString();
			this.edit('none');
		}
		
		this.edit = function (btn) {
			switch  (btn) {
			case 'btn00': _string+='00';  break;
			case 'btn0': _string+='0'; break;
			case 'btn1': _string+='1'; break;
			case 'btn2': _string+='2'; break;
			case 'btn3': _string+='3'; break;
			case 'btn4': _string+='4'; break;
			case 'btn5': _string+='5'; break;
			case 'btn6': _string+='6'; break;
			case 'btn7': _string+='7'; break;
			case 'btn8': _string+='8'; break;
			case 'btn9': _string+='9'; break;
			case 'btnDot': if($.inArray('.',_string)===-1){_string+='.';} break;
			case 'btnNeg': 
				if($.inArray('-',_string)===-1){
					_string='-'+_string; 
				} else {_
					string=_string.substring(1);
				}
			break;
			case 'btnBcsp':  _string = _string.substring(0,_string.length-1); break;
			};
			// save sign
			var sign = (_string[0]==='-'?'-':'+');
			// cut sign out
			if (sign==='-'){_string=_string.substring(1);}
			// cut leading zeros
			while(_string[0]==='0'){_string=_string.substring(1);}
			// add leading zero for values with abs. less than 1
			if (_string[0]==='.'){_string = '0'+_string;}
			if (_string.length===0){
				_string='0';
			} else if (sign==='-'){ // put sign back
				_string=sign+_string;
			}
			// cut digits after decimal point
			var point = $.inArray('.',_string);
			if(point>=0){
				var dec_s = _string.substring(point+1); 
				if (dec_s.length > MAX_DEC){
					_string = _string.substring(0,point+1) + dec_s.substring(0,MAX_DEC);					
				}
			}
			// cut digits > MAX_DIGITS
			if(_string.length > MAX_DIGITS){
				_string = _string.substring(0,MAX_DIGITS);
			}
		}
	}
	
	var op1;  // 1st operand
	var op2;  // 2nd operand
	var state; // states: 'first_op','second','second_op','op_first'
	
	var history = [];
	var history_get_link = hgl;
	var history_add_link = hal;
	
	function out(operand){
		$('#output').html(operand.getString());
	}
	
	function reset() {
		op1 = new Operand();
		op2 = new Operand();
		state = 'first_op';
		out(op1);
	}
	
	function showHistory() {
		var his  = '';
		for (h in history) {
			his += history[h].text + '<br />'; 
		}
		$('#historyArea').html(his);
	}
	
	function loadHistory() {
		$.ajax({
			url: history_get_link,
			context: this,
			success: function (result) {
				history = result;
				showHistory();
			},
		});
	}
	
	function addToHistory(new_line) {
		$.ajax({
			url: history_add_link,
			data: {e : new_line},
			type: 'POST',
			dataType: 'json',
			context: this,
			success: function (result) {
				loadHistory();
			},
		});
	}
	
	function setOp(btn){
		switch (btn) {
		case 'btnPlus': op = 'plus'; break;
		case 'btnMinus': op = 'minus'; break;
		case 'btnMul': op = 'mul'; break;
		case 'btnDiv': op = 'div'; break;
		}
	}
	
	function doMath() {
		var res = 0; 
		var op_s = '?';
		switch(op) {
		case 'plus': res = op1.getValue()+op2.getValue(); op_s = '+';break;
		case 'minus': res = op1.getValue()-op2.getValue(); op_s = '-';break;
		case 'mul': res = op1.getValue()*op2.getValue(); op_s = '*';break;
		case 'div': res = op1.getValue()/op2.getValue(); op_s = '/';break;
		}
		var res_s = op1.getString()+' '+op_s+' '+op2.getString()+' = ';
		reset();
		op1.setValue(res);
		out(op1);
		res_s += op1.getString();
		LOG.s('res === '+res);
		LOG.s('<<< '+res_s);
		addToHistory(res_s);
	}
	
	this.pressButton = function (btn) {
		LOG.s('>>> btn: '+btn+' /'+state+'/');
		if (btn === 'btnC'){
			reset();
			return
		}
		switch  (state) {
		case 'first_op':
			if ($.inArray(btn,BTNS_ED)>=0) {
				op1.edit(btn); 
				out(op1);
			} else if ($.inArray(btn,BTNS_OP)>=0) {
				setOp(btn);
				state = 'second';
			}
		break;
		case 'second':
			if ($.inArray(btn,BTNS_ED)>=0) { 
				op2.edit(btn);
				out(op2);
				if (op2.getString().length > 0) {
					state = 'second_op';
				}
			} else if ($.inArray(btn,BTNS_OP)>=0) {
				setOp(btn);
			}	
		break;
		case 'second_op':
			if ($.inArray(btn,BTNS_ED)>=0) { 
				op2.edit(btn); 
				out(op2);
			} else if ($.inArray(btn,BTNS_OP)>=0) {
				doMath();
				setOp(btn);
				state = 'second';
			} else if (btn === 'btnEq') {
				doMath();
				state = 'op_first';
			}
		break;
		case 'op_first':
			if ($.inArray(btn,BTNS_ED)>=0) {
				op1=new Operand();
				op1.edit(btn);
				out(op1);
				state = 'first_op';
			} else if ($.inArray(btn,BTNS_OP)>=0) {
				setOp(btn);
				state = 'second';
			}
		break;
		};
	}
	
	reset();
	loadHistory();  //TODO: set timer for this
}


var calc;
