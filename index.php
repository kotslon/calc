<?php

// change the following paths if necessary
// yii_path.php is ignored by VCS
$local_yii=dirname(__FILE__).DIRECTORY_SEPARATOR.'yii_path.php';
if (file_exists($local_yii)) {
	require_once($local_yii);
} else {
	$yii=dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'yii'
		 .DIRECTORY_SEPARATOR.'framework'.DIRECTORY_SEPARATOR.'yii.php';
}
// local.php is ignored by VCS
$local_config=dirname(__FILE__).DIRECTORY_SEPARATOR.'protected'
		.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'local.php';
if (file_exists($local_config)){
	$config=$local_config;
} else {
	$config=dirname(__FILE__).DIRECTORY_SEPARATOR.'protected'
			.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'main.php';
}
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
