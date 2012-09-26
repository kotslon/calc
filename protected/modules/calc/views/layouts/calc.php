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

<div class="container" style="background-color: #f9f9f9;">

 	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#">Diletants' calculator</a>
				<ul class="nav nav-pills pull-right" >
					<li><a href="http://blog.diletantclub.ru">Blog</a></li>
				</ul>
		</div>	
	</div>	

	<?php echo $content; ?>

	<div class="row">
	    <div class="span12">
	        <h6 style="text-align: center">Copyright &copy; 2012 by Diletant club. All Rights Reserved. Powered by Yii Framework. </h6>
	    </div>
	</div>

</div>

</body>
</html>
