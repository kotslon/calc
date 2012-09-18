<?php

return CMap::mergeArray(
        require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'main.php'),
        array(
        	/*	
        	 *   Local settings here
        	 * 
            'components' => array(
                'db' => array(
                    'connectionString' => 'mysql:host=mysql;dbname=databaseName',
                    'emulatePrepare' => true,
                    'username' => 'user',
                    'password' => 'password',
                    'charset' => 'utf8',
                ),
            ),
            */
     )
);
