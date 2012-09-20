<?php

class HistoryController extends Controller
{
	public function actionIndex()
	{
		header('Content-type: application/json');
		
		$history = array('5+4=9', '6*8=48');
		
		echo CJSON::encode($history);
		
		Yii::app()->end();
	}
	
	public function actionAdd()
	{
		header('Content-type: application/json');
		
		$result = 'Ok';
		
		echo CJSON::encode($result);
		
		Yii::app()->end();
	}
}
