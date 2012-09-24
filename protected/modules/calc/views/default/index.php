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
<script>
var calc = new Calc('<?php echo $this->history_get_link; ?>',
					'<?php echo $this->history_add_link; ?>');
</script>

<script src="js/bootstrap.js"></script>
<!--  style="padding-left:130px"-->

<div class="row">		
	<div class="span8">
		<div class="input-append">
			<input class="span7" readonly id="appendedInputButton" style="background-color: #ffffff"  type="text">
			<button class="btn btn-warning" type="button" id="ButtonTwit" onClick="calc.pressButton('Twitter')">Twitter</button>
		</div>	
		<div class="row">
			<div class="span2"><button class="btn btn-info calcBtn" id="ButtonC" onClick="calc.pressButton('ButtonC')">C</button></div>
			<div class="span4"><img src="images/logo_DC.png" class="img-rounded"></div>
			<div class="span2"><button class="btn btn-info calcBtn" id="ButtonBcsp" onClick="calc.pressButton('ButtonBcsp')">Bck</button></div>
		</div>										
		<div class="row">
			<div class="span2"><button class="btn calcBtn" id="Button7" onClick="calc.pressButton('Button7')">7</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button8" onClick="calc.pressButton('Button8')">8</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button9" onClick="calc.pressButton('Button9')">9</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonMinus" onClick="calc.pressButton('ButtonMinus')">-</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonNeg" onClick="calc.pressButton('ButtonNeg')">-/+</button></div>
		</div>									
		<div class ="row">				
			<div class="span2"><button class="btn calcBtn" id="Button4" onClick="calc.pressButton('Button4')" >4</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button5" onClick="calc.pressButton('Button5')" >5</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button6" onClick="calc.pressButton('Button6')" >6</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonMul" onClick="calc.pressButton('ButtonMul')">*</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonDiv" onClick="calc.pressButton('ButtonDiv')">/</button></div>
		</div>			
		<div class="row">	
			<div class="span6">				
				<div class="row">
					<div class=" span2"><button class="btn calcBtn" id="Button1" onClick="calc.pressButton('Button1')">1</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button2" onClick="calc.pressButton('Button2')">2</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button3" onClick="calc.pressButton('Button3')">3</button></div>
				</div>
				<div class="row">
					<div class=" span2"><button class="btn calcBtn" id="Button0" onClick="calc.pressButton('Button0')">0</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button00" onClick="calc.pressButton('Button00')">00</button></div>
					<div class=" span2"><button class="btn calcBtn" id="ButtonDot" onClick="calc.pressButton('ButtonDot')">.</button></div>
				</div>
			</div>				
			<div class="span2">
				<div class="row">	
					<div class="span1"><button class="btn btn-info calcBtn bigBtn" id="ButtonPlus" onClick="calc.pressButton('ButtonPlus')">+</button></div>
					<div class="span1"><button class="btn btn-info calcBtn bigBtn" id="ButtonEq" onClick="calc.pressButton('ButtonEq')">=</button></div>
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
	
