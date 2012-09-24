<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page" style="background-color: #f9f9f9; padding: 20px; padding-top: 5px;">
<!--
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div> header -->

	<div class="navbar span12" style="width: 95%" >
		<div class="navbar-inner">
			<a class="brand" href="#">Calculator DC</a>
				<ul class="nav nav-pills pull-right" >
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
		</div>	
	</div>	
	
	
	
	
	<?php echo $content; ?>

	<div class="clear"></div>
		<footer class="footer" style="background-color:#ffffff; margin-top: 10%;">
		    <div class="container" style="margin:0 auto;">
		        <div class="well navbar span12 " style="margin: 0px; padding: 0px">
			        <h6 style="margin-left: 25%">Copyright &copy; somewhen by Diletant club. All Rights Reserved. Powered by Yii Framework. </h6>
		        </div>
		    </div>
		</footer>
<button type="button" onclick="calc.loadHistory();">Load history</button>
<button type="button" onclick="calc.addToHistory();">Add to history</button>
<button type="button" onclick="calc.showHistory();">Show history</button>
	
<!--	<div id="footer">
		Copyright &copy; somewhen by Diletant club.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div> footer -->

</div><!-- page -->

</body>
</html>
