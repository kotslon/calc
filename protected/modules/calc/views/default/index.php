<?php
/* @var $this DefaultController */

Yii::app()->clientScript->registerCssFile(
		Yii::app()->baseUrl.'/css/bootstrap.css'
);

Yii::app()->clientScript->registerCssFile(
		Yii::app()->baseUrl.'/css/calc.css'
);

Yii::app()->clientScript->registerScriptFile(
		   Yii::app()->baseUrl.'/js/jquery.js'
		);
Yii::app()->clientScript->registerScriptFile(
		   Yii::app()->baseUrl.'/js/calc.js'
		);

Yii::app()->clientScript->registerScriptFile(
		Yii::app()->baseUrl.'/js/bootstrap.js'
);

?>

	<script src="js/bootstrap.js"></script>
<!--  style="padding-left:130px"-->

		
<div class="span10">
	<div class="input-append">
		<input class="span10" readonly id="appendedInputButton" style="background-color: #ffffff" size= "16" type="text">
		<button class="btn btn-warning" type="button" id="ButtonTwit" onClick="calc.pressButton('Twitter')">Twitter</button>
	</div>	
	<div class="row">
		<div class="span2"><button class="btn" id="ButtonC" onClick="calc.pressButton('ButtonC')" style="width: 100%; line-height: 40px">C</button></div>
		<div class="span6"><h5 style="text-align: center">Diletant Club<br/> web development by newbies</h5></div>
		<div class="span2"><button class="btn" id="ButtonBcsp" onClick="calc.pressButton('ButtonBcsp')" style="width: 100%; line-height: 40px">Bck</button></div>
	</div>										
	<div class="row">
		<div class="span2"><button class="btn" id="Button7" onClick="calc.pressButton('Button7')" style="width: 100%; line-height: 45px;">7</button></div>
		<div class="span2" ><button class="btn" id="Button8" onClick="calc.pressButton('Button8')" style="width: 100%; line-height: 45px;">8</button></div>
		<div class="span2" ><button class="btn" id="Button9" onClick="calc.pressButton('Button9')" style="width: 100%; line-height: 45px;">9</button></div>
		<div class="span2"><button class="btn" id="ButtonMinus" onClick="calc.pressButton('ButtonMinus')" style="width: 100%; line-height: 45px">-</button></div>
		<div class="span2"><button class="btn" id="ButtonNeg" onClick="calc.pressButton('ButtonNeg')" style="width: 100%; line-height: 45px;">-/+</button></div>
	</div>									
	<div class ="row">				
					
		<div class="span2"><button class="btn" id="Button4" onClick="calc.pressButton('Button4')" style="width: 100%; line-height: 45px;">4</button></div>
		<div class="span2" ><button class="btn" id="Button5" onClick="calc.pressButton('Button5')" style="width: 100%; line-height: 45px;">5</button></div>
		<div class="span2" ><button class="btn" id="Button6" onClick="calc.pressButton('Button6')" style="width: 100%; line-height: 45px;">6</button></div>
		<div class="span2" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 0px"><button class="btn" id="ButtonMul" onClick="calc.pressButton('ButtonMul')" style="width: 100%; line-height: 45px;">*</button></div>
		<div class="span2" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 4px"><button class="btn" id="ButtonDiv" onClick="calc.pressButton('ButtonDiv')" style="width: 100%; line-height: 45px;">/</button></div>
	</div>			
	<div class="row span6">				
		<div class="row">
			<div class=" span2"><button class="btn" id="Button1" onClick="calc.pressButton('Button1')" style="width: 100%; line-height: 45px;">1</button></div>
			<div class=" span2" ><button class="btn" id="Button2" onClick="calc.pressButton('Button2')" style="width: 100%; line-height: 45px;">2</button></div>
			<div class=" span2" ><button class="btn" id="Button3" onClick="calc.pressButton('Button3')" style="width: 100%; line-height: 45px;">3</button></div>
		</div>
		<div class="row">
			<div class=" span2"><button class="btn" id="Button0" onClick="calc.pressButton('Button0')" style="width: 100%; line-height: 45px;">0</button></div>
			<div class=" span2" ><button class="btn" id="Button00" onClick="calc.pressButton('Button00')" style="width: 100%; line-height: 45px;">00</button></div>
			<div class=" span2" ><button class="btn" id="ButtonDot" onClick="calc.pressButton('ButtonDot')" style="width: 100%; line-height: 45px;">.</button></div>
		</div>
	</div>				
	<div class="span4" style="margin: 0px; padding: 0px; width: 210px">
		<div class="span2" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 0px"><button class="btn" id="ButtonPlus" onClick="calc.pressButton('ButtonPlus')" style="width: 100%; line-height: 105px;">+</button></div>
		<div class="span2" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 4px"><button class="btn" id="ButtonEq" onClick="calc.pressButton('ButtonEq')" style="width: 100%; line-height: 105px;">=</button></div>
	</div>							
</div>
<div class="span2">
	<div class="input-append">
		<textarea class="span2" rows="14" readonly style="background-color: #ffffff; resize: none"></textarea>
	</div>
</div>
			
	
