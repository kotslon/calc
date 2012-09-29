<?php /* @var $this DefaultController */ ?>

<div class="row">		
	<div class="span8">
		<!-- <div class="input-append">
			<input class="span7" readonly id="appendedInputButton" style=" background-color: #ffffff"  type="text">
			<button class="btn btn-warning" type="button" id="ButtonTwit" onClick="calc.pressButton('btnTwit')" style="display: none;">Twitter</button>
		</div>
		<div class="row">
			<div class="span8 calcOut" id="output"></div>
		</div>
		-->
		<div class="row">
			<div class="span2" id="twit"><div id="twit-in" class="btn btn-warning calcBtn">
			<a href="https://twitter.com/share" class="twitter-share-button" data-text="Я сосчитал" data-size="large" data-count="none" data-hashtags="dc_calc">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<!-- <button class="btn btn-warning calcBtn">twit</button>-->
			</div>
  			<div class="span8"><input class="span8" id="output" type="text" /></div>	
		</div>
		<div class="row">
			<div class="span2"><button class="btn btn-info calcBtn" id="ButtonC" onClick="calc.pressButton('btnC')">C</button></div>
			<div class="span4"><img src="images/logo_DC.png" /></div>
			<div class="span2"><button class="btn btn-info calcBtn" id="ButtonBcsp" onClick="calc.pressButton('btnBcsp')">Bck</button></div>
		</div>										
		<div class="row">
			<div class="span2"><button class="btn calcBtn" id="Button7" onClick="calc.pressButton('btn7')">7</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button8" onClick="calc.pressButton('btn8')">8</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button9" onClick="calc.pressButton('btn9')">9</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonMinus" onClick="calc.pressButton('btnMinus')">-</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonNeg" onClick="calc.pressButton('btnNeg')">-/+</button></div>
		</div>									
		<div class ="row">				
			<div class="span2"><button class="btn calcBtn" id="Button4" onClick="calc.pressButton('btn4')" >4</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button5" onClick="calc.pressButton('btn5')" >5</button></div>
			<div class="span2"><button class="btn calcBtn" id="Button6" onClick="calc.pressButton('btn6')" >6</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonMul" onClick="calc.pressButton('btnMul')">*</button></div>
			<div class="span1"><button class="btn btn-info calcBtn" id="ButtonDiv" onClick="calc.pressButton('btnDiv')">/</button></div>
		</div>			
		<div class="row">	
			<div class="span6">				
				<div class="row">
					<div class=" span2"><button class="btn calcBtn" id="Button1" onClick="calc.pressButton('btn1')">1</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button2" onClick="calc.pressButton('btn2')">2</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button3" onClick="calc.pressButton('btn3')">3</button></div>
				</div>
				<div class="row">
					<div class=" span2"><button class="btn calcBtn" id="Button0" onClick="calc.pressButton('btn0')">0</button></div>
					<div class=" span2"><button class="btn calcBtn" id="Button00" onClick="calc.pressButton('btn00')">00</button></div>
					<div class=" span2"><button class="btn calcBtn" id="ButtonDot" onClick="calc.pressButton('btnDot')">.</button></div>
				</div>
			</div>				
			<div class="span2">
				<div class="row">	
					<div class="span1"><button class="btn btn-info calcBtn bigBtn" id="ButtonPlus" onClick="calc.pressButton('btnPlus')">+</button></div>
					<div class="span1"><button class="btn btn-info calcBtn bigBtn" id="ButtonEq" onClick="calc.pressButton('btnEq')">=</button></div>
				</div>
			</div>
		</div>								
	</div>
	<div class="span4">
		<div class = "row">
			<div class="span2 offset1"><h5 style="text-align: center">HISTORY</h5></div>
		</div>
		<div class = "row">
			<div class="span4" id="historyArea">
		</div>
	</div>
</div>			
	
