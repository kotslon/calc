<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Diletant club calc">
    <meta name="author" content="Diletant club">

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
	
<!--	<div id="footer">
		Copyright &copy; somewhen by Diletant club.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div> footer -->

</div><!-- page -->

</body>
</html>
