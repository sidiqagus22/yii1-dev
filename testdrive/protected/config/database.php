<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	// 'connectionString' => 'mysql:host=localhost;dbname=db_yii1',
	// 'emulatePrepare' => true,
	// 'username' => 'root',
	// 'password' => '',
	// 'charset' => 'utf8',
	//postgresql
	'connectionString' => 'pgsql:host=localhost;port=5432;dbname=db_yii1',
    'emulatePrepare' => true,
    'username' => 'postgres',
    'password' => 'postgres',
    'charset' => 'utf8',
);
