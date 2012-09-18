<?php

// change the following paths if necessary
//$yiic=dirname(__FILE__).'/../../../../../var/www/yii/framework/yiic.php';
//$config=dirname(__FILE__).'/config/console.php';

// yii_path.php is ignored by VCS
$local_yii=dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'yii_path.php';
if (file_exists($local_yii)) {
	require_once($local_yii);
} else {
	$yiic=dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR
	     .'..'.DIRECTORY_SEPARATOR
	     .'framework'.DIRECTORY_SEPARATOR.'yiic.php';
}
// local_console.php is ignored by VCS
$local_config=dirname(__FILE__).DIRECTORY_SEPARATOR.'config'
              .DIRECTORY_SEPARATOR.'local_console.php';
if (file_exists($local_config)){
	$config=$local_config;
} else {
	$config=dirname(__FILE__).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'console.php';
}

require_once($yiic);
