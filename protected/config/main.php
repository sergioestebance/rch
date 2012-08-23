<?php
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'RCH 2.0',
	'language'=>'es',
	'preload'=>array(
		'log',
		'bootstrap',
		'session',
		),

	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*', 
		'application.modules.rights.*',
		'application.modules.rights.components.*',
		'application.extensions.bootstrap.*',
	),

	'modules'=>array(
		'rights'=>array( 			
				'superuserName'=>'admin',
				'enableBizRuleData'=>true,
				'install'=>false,				
			 ),						

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'dep1.4',
			'generatorPaths' =>  array(
					'ext.giix-core', // giix generators
				),
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
	),
		
),

	'components'=>array(
		'session' => array (
			'sessionName' =>'Session',
			'class'=> 'CDbHttpSession',			
			'autoCreateSessionTable'=> false,
			'connectionID' => 'db',
			'sessionTableName' => 'yiisession',
			'timeout' => 300,
			),
		'bootstrap'=>array(
				'class'=>'ext.bootstrap.components.Bootstrap', 
			),
	
		'user'=>array(
			'class'=>'RWebUser', 
			'allowAutoLogin'=>true,
		),
	
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
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost; dbname=rch2_db',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		
		'request' => array(
        'class' => 'application.components.HttpRequest',
        'enableCsrfValidation' => true,
		'enableCookieValidation'=>true,
		'noCsrfValidationRoutes'=>array('user/ingresar'),
		),
		
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'contacto@raboit.com',
	),
);