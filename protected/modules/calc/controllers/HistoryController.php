<?php

class HistoryController extends Controller
{
	public function filters() {
		return array(
			'ajaxOnly + index, add',
		);
	}
    
	public function actionIndex()
	{		
		$hist = new History;
		//$history = array('5+4=9', '6*8=48');
		$criteria = new CDbCriteria;
		$criteria->mergeWith(array(
    		'limit'=>20,
			'order'=>'calc_date',
		));
		
		$history = History::model()->findAll();
		
		header('Content-type: application/json');
		echo CJSON::encode($history);
		Yii::app()->end();
	}
	
	public function actionAdd()
	{
		$expr = (string) Yii::app()->getRequest()->getParam('e');
		
		$hist = new History;
		$hist->text = $expr;
		$hist->calc_date = new CDbExpression('NOW()');
		$hist->save();
		
		header('Content-type: application/json');
		$result = $expr;
		echo CJSON::encode($result);
		Yii::app()->end();
	}
	
}
