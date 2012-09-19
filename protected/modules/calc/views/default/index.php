<?php
/* @var $this DefaultController */
Yii::app()->clientScript->registerScriptFile(
		   Yii::app()->baseUrl.'/js/jquery.js'
		);
Yii::app()->clientScript->registerScriptFile(
		   Yii::app()->baseUrl.'/js/calc.js'
		);
Yii::app()->clientScript->registerCssFile(
		Yii::app()->baseUrl.'/css/main.css'
);
?>

<h1>Calc here.</h1>
<button type="button" onclick="helloDiletant();">Hello?</button>
<br/><br/><br/>
