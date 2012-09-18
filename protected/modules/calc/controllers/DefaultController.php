<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->layout = '//../modules/calc/views/layouts/calc';
		$this->render('index');
	}
}