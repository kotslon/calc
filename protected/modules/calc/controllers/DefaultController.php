<?php

class DefaultController extends Controller
{
	public $layout = 'calc';

	public function actionIndex()
	{
		$this->registerScripts();
		$this->render('index');
	}
	
	private function registerScripts()
	{
		$cs = Yii::app()->getClientScript();
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/calc.css');
		$cs->registerCoreScript('jquery');
		$cs->registerScriptFile(Yii::app()->baseUrl.'/js/calc.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->baseUrl.'/js/bootstrap.js', CClientScript::POS_END);
		$cs->registerScript(
			'calc',
			"var calc = new Calc('{$this->createAbsoluteUrl('calc/history/index')}','{$this->createAbsoluteUrl('calc/history/add')}');", 
			CClientScript::POS_READY
		);
	}
}
