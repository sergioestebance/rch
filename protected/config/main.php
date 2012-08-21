<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Recargas Chile',
	'language'=>'es',
	

	// preloading 'log' component
	'preload'=>array('log','bootstrap','session'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*', // giix components
		'application.modules.rights.*',// rights
		'application.modules.rights.components.*',// rights

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'comparemoncho',
			'generatorPaths' => array(
				'ext.giix-core', // giix generators
			),
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'rights'=>array( 			
				'superuserName'=>'Admin',
				'userNameColumn'=>'username',
				'userIdColumn'=>'id',
				'enableBizRuleData'=>true,
				'install'=>false,
				'debug'=>true,  				
			 ),	
		
	),
 
	// application components
	'components'=>array(
		'session' => array (

			'sessionName' => 'Session',
			'class'=> 'CDbHttpSession',			
			'autoCreateSessionTable'=> false,
			'connectionID' => 'db',
			'sessionTableName' => 'yiisession',
			'useTransparentSessionID' => true,
			'autoStart' => true,
			'cookieMode' => ($_POST['PHPSESSID']) ? 'none' : 'allow',
			'timeout' => 300,
			),
	
	
		'bootstrap'=>array(
			'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
		),
		'user'=>array(
			//YII RIGHTS
			'class'=>'RWebUser',
			//
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'urlSuffix'=>'.html',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
			

		'authManager'=>array(
				'class'=>'RDbAuthManager',
				'connectionID'=>'db',			
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=rch2_db',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
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
		'adminEmail'=>'webmaster@example.com',
	),
);