<?php

class HistoryController extends Controller
{
	public function actionIndex()
	{		
		$hist = new History;
		//$history = array('5+4=9', '6*8=48');
		$history = History::model()->findAll();
		
		header('Content-type: application/json');
		echo CJSON::encode($history);
		Yii::app()->end();
	}
	
	public function actionAdd($e)
	{
		$expr = (string) $e;
		
		$hist = new History;
		$hist->text = $expr;
		$hist->save();
		
		header('Content-type: application/json');
		$result = $expr;
		echo CJSON::encode($result);
		Yii::app()->end();
	}
}
