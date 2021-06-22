<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Лаборатория GPS НС РАН',
        'language'=>'ru',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'ext.EExcelView.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'ziga',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
//		//	'ipFilters'=>array('127.0.0.1','::1'),
	//		'ipFilters'=>array('127.0.0.1','::1','62.84.121.5'), //Для локального доступа
                    // 'newFileMode'=>0666,
                     //'newDirMode'=>0777,
                    'ipFilters'=>array(),// доступ из вне
		),
		
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
                 'clientScript' => array(
                          'scriptMap' => array(
                       'jquery.js' => false,
                          ),
                 ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
                   'showScriptName'=>false
		),
		

		// database settings are configured in database.php
	//	'db'=>require(dirname(__FILE__).'/database.php'),

		'db'=>array(
		'connectionString'=>'mysql:host=localhost;dbname=db_gps',
		'emulatePrepare'=> true,
		'username'=>'root',
		'password'=>'ziga',
		'charset'=>'utf8',
		
		),	

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			//'errorAction'=>YII_DEBUG ? null : 'site/error',
                        'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'olenpro85@gmail.com',
	),
);
