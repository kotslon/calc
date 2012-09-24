<?php

class DefaultController extends Controller
{
	public $layout = 'calc';
	public $history_get_link = 'index.php?r=calc/history';
	public $history_add_link = 'index.php?r=calc/history/add';
	
	public function actionIndex()
	{
		$this->registerScripts();
		$this->render('index');
	}
	
	private function registerScripts()
	{
		$cs = Yii::app()->clientScript;
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/calc.css');
		$cs->registerCoreScript('jquery');
		$cs->registerScriptFile(Yii::app()->baseUrl.'/js/calc.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->baseUrl.'/js/bootstrap.js', CClientScript::POS_END);
	}
}
