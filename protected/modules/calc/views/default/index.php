<?php /* @var $this DefaultController */ ?>

<div class="row">		
	<div class="span8">
		<div class="input-append">
			<input class="span7" readonly id="appendedInputButton" style="background-color: #ffffff"  type="text">
			<button class="btn btn-warning" type="button" id="ButtonTwit" onClick="calc.pressButton('Twitter')">Twitter</button>
		</div>
		
		<div id="calc-disp" class="well" style="text-align:right;">
			<small id="log" style="display: none; padding-top: -10px;"></small>
			<hr style="padding: 0px; margin: 0px;" />
			<strong id="expr">0</strong>
		</div>
		
		<div class="row">
			<div class="span2"><button class="btn btn-info calcBtn" id="ButtonC" onClick="calc.Clear()">C</button></div>
			<div class="span4"><img src="images/logo_DC.png" class="img-rounded"></div>
			<div class="span2"><button class="btn btn-info calcBtn" id="ButtonBcsp" onClick="calc.Back()">Bck</button></div>
		</div>										
		<div class="row">
			<div class="span2"><button class="btn calcBtn" id="Button7" onClick="calc.Operand('7')">7</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button8" onClick="calc.Operand('8')">8</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button9" onClick="calc.Operand('9')">9</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonMinus" onClick="calc.Operator('-')">-</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonNeg" onClick="calc.Neg()">-/+</button></div>
		</div>									
		<div class ="row">				
			<div class="span2"><button class="btn calcBtn" id="Button4" onClick="calc.Operand('4')" >4</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button5" onClick="calc.Operand('5')" >5</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button6" onClick="calc.Operand('6')" >6</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonMul" onClick="calc.Operator('*')">*</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonDiv" onClick="calc.Operator('/')">/</button></div>
		</div>			
		<div class="row">	
			<div class="span6">				
				<div class="row">
					<div class=" span2"><button class="btn calcBtn" id="Button1" onClick="calc.Operand('1')">1</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button2" onClick="calc.Operand('2')">2</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button3" onClick="calc.Operand('3')">3</button></div>
				</div>
				<div class="row">
					<div class=" span2"><button class="btn calcBtn" id="Button0" onClick="calc.Operand('0')">0</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button00" onClick="calc.pressButton('Button00')">00</button></div>
					<div class=" span2"><button class="btn calcBtn" id="ButtonDot" onClick="calc.pressButton('ButtonDot')">.</button></div>
				</div>
			</div>				
			<div class="span2">
				<div class="row">	
					<div class="span1"><button class="btn btn-info calcBtn bigBtn" id="ButtonPlus" onClick="calc.Operator('+')">+</button></div>
					<div class="span1"><button class="btn btn-info calcBtn bigBtn" id="ButtonEq" onClick="calc.Equal()">=</button></div>
				</div>
			</div>
		</div>								
	</div>
	<div class="span4" id="historyArea">
		<h5 style="text-align: center">HISTORY</h5></div>
			<!-- <textarea id="historyArea" class="span4" rows="14" readonly style="background-color: #ffffff; resize: none"></textarea>
			 -->
			
	</div>
</div>			
	
