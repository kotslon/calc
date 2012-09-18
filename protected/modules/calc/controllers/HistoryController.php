<?php

class HistoryController extends Controller
{
	public function actionIndex()
	{
		$history = array(
					'5+4=9',
					'6*8=48',
				);
		echo CJSON::encode($history);
	}
	
	public function actionAdd()
	{
		$result = 'Ok';
		echo CJSON::encode($result);
	}
}
