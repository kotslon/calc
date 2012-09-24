<?php

class DefaultController extends Controller
{
	var $history_get_link = 'index.php?r=calc/history';
	var $history_add_link = 'index.php?r=calc/history/add';
	
	public function actionIndex()
	{
		$this->layout = '//../modules/calc/views/layouts/calc';
		$this->render('index');
	}
}
