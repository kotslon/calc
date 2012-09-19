<?php
/* @var $this DefaultController */

Yii::app()->clientScript->registerCssFile(
		Yii::app()->baseUrl.'/css/bootstrap.css'
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

<button type="button" onclick="helloDiletant();">Hello?</button>
<button type="button" onclick="calc.loadHistory();">Load history</button>
<button type="button" onclick="calc.addToHistory();">Add to history</button>
<br/><br/><br/>

	<script src="js/bootstrap.js"></script>
	
	
	<div class="navbar span12" >
		<div class="navbar-inner">
			<div class="nav-collapse">
				<a class="brand" href="#">Calculator</a>
				<ul class="nav nav-pills pull-right" >
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>	
	</div>	


<!--  style="padding-left:130px"-->

	<div class="conteiner span12" >
		<div class="row-fluid" style="margin: 0px; padding: 0px" >
			<div class="span8 " style="margin: 0px; padding: 0px">
				<div class="input-append" style="margin: 0px; padding: 0px">
					<input class="span8" readonly id="appendedInputButton" style="width: 88%; background-color: #ffffff" size= "116" type="text">
						<button class="btn btn-warning" type="button" >Twitter</button>
					
					<div class="conteiner-fluid" style="margin: 0px; padding: 0px">
							<div class="well span12" style="margin: 0px; padding: 0px">
								<div class="span3"><button class="btn" style="width: 100%; line-height: 40px">C</button></div>
								<div class="span6"><button>1</button></div>
								<div class="span3"><button class="btn" style="width: 100%; line-height: 40px">Bck</button></div>
							</div>
														
							<div class=" well span8" style="margin: 0px; padding: 0px">
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">7</button></div>
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">8</button></div>
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">9</button></div>
																
								<div class=" span4" style="margin-left: 0px"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">4</button></div>
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">5</button></div>
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">6</button></div>
								
								<div class=" span4" style="margin: 0px; padding: 0px"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">1</button></div>
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">2</button></div>
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">3</button></div>
								<div class=" span4" style="margin-left: 0px"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">0</button></div>
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">00</button></div>
								<div class=" span4"><button class="btn" style="width: 100%; line-height: 40px; margin-top: 5px">.</button></div>	
							</div>
							<div class="well span4" style="margin: 0px; padding: 0px; width: 210px">
								<div class="well span5" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 15px"><button class="btn" style="width: 100%; line-height: 40px">-</button></div>
								<div class="well span5" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 15px"><button class="btn" style="width: 100%; line-height: 40px;">-/+</button></div>
								<div class="well span5" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 15px"><button class="btn" style="width: 100%; line-height: 40px;">*</button></div>
								<div class="well span5" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 15px"><button class="btn" style="width: 100%; line-height: 40px;">/</button></div>		
								<div class="well span5" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 15px"><button class="btn" style="width: 100%; line-height: 90px;">+</button></div>
								<div class="well span5" style="margin: 0px; padding: 0px; margin-top: 5px; margin-left: 15px"><button class="btn" style="width: 100%; line-height: 90px;">=</button></div>
							</div>				
							
					</div>
					
						
<!-- 			<table class="table-boardered" style="width: 100%; border-spacing: 0;" >
						<thead>
							<tr>	
								<th class="well" ><button class="btn">C</button></th>
								<th class="well" colspan="3" >""</th>
								<th class="well" ><button class="btn">Bcsp</button></th>
							</tr>	
						</thead>
						<tbody>
							<tr  >
								<td><button class="btn" Style="width: 80%; padding: 10%">7</button></td>
								<td><button class="btn" >8</button></td>
								<td><button class="btn">9</button></td>
								<td><button class="btn">-</button></td>
								<td><button class="btn">-/+</button></td>
							</tr>
							<tr>
								<td><button class="btn">4</button></td>
								<td><button class="btn">5</button></td>
								<td><button class="btn">6</button></td>
								<td><button class="btn">*</button></td>
								<td><button class="btn">/</button></td>
							</tr>
							<tr>
								<td><button class="btn">1</button></td>
								<td><button class="btn">2</button></td>
								<td><button class="btn">3</button></td>
								<td rowspan="2"><button class="btn" style="line-height: 47px; width: 57px">+</button></td>
								<td rowspan="2"><button class="btn btn-primary" style="line-height: 47px; line-width: 47px">=</button></td>
								
							</tr>
							<tr>
								<td><button class="btn">0</button></td>
								<td><button class="btn">00</button></td>
								<td><button class="btn">.</button></td>
								
							</tr>						
						
						</tbody>
					
					
					</table>  -->
				
				 </div>
			</div>
			<div class="span4">
				<div class="input-append">
					<textarea class="span12" rows="14" readonly style="background-color: #ffffff; resize: none"></textarea>
				</div>
			</div>
			
		</div>

		<footer class="footer" style="background-color:#ffffff; margin-top: 250px; padding: 0px">
		    <div class="container" style="margin:0 auto;">
		       <!--  <div class="row">
		            <div class="well span2 offset1" style="font-size: 10px">
		                <h5>Company</h5>
		                <ul>
		                    <li><a href="">About Us</a></li>
		                    <li><a href="">Contact</a></li>
		                </ul>
		            </div>
		            <div class="well span2 offset1" style="font-size: 10px">
		                <h5>Resource</h5>
		                <ul>
		                    <li style="padding-top:110"><a href="">Get help</a></li>
		                    <li><a href="">FAQ</a></li>
		                    <li><a href="">Support</a></li>
		                </ul>
		            </div>
		            <div class="well span2 offset1" style="font-size: 10px">
		                <h5>Connect</h5>
		                <ul>
		                    <li><a href="" title="Facebook">Facebook</a></li>
		                    <li><a href="" title="Twitter">Twitter</a></li>
		                    <li><a href="" title="LinkedIn">LinkedIn</a></li>
		                    <li><a href="" title="Google+">Google+</a></li>
		                    <li><a href="" title="RSS">RSS</a></li>
		                    <li><a href="" title="Blogs">Blogs</a></li>
		                </ul>
		            </div>
		         </div> -->
		        <div class="well navbar span12 " style="margin: 0px; padding: 0px">
		        	<h6 style="margin-left: 40%"> � Diletant club 2012 </h6>
		        </div>
		    </div>
		</footer>
	</div>	
