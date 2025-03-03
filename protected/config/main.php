<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Carambar',
    "defaultController" => "index/index",

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.validators.*',
         'ext.easyimage.EasyImage',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','172.16.111.87','::1'),
		),

	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'session' => array (
			// Provide a custom name for the session id to differentiate it
			// from the default PHPSESSID
			// Cannot use dots in the session id :(
			//'autoStart' => true,
			'timeout' => 1440,
			'cookieMode' => 'only',
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=carambar',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			'errorAction'=>'user/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
                //取消注释开启logo

				// array(
				// 	'class'=>'CWebLogRoute',
				// ),

			),
		),
        "authManager" => array(
            "class" => "PhpAuthManager"
        ),
        'easyImage' => array(
               'class' => 'application.extensions.easyimage.EasyImage',
               'driver' => 'GD',
               'quality' => 100,
               'cachePath' => '/uploads',
               'cacheTime' => 2592000,
               //'retinaSupport' => false,
       ),
        'FileCache'=>array(
            'class'=>'CFileCache',
           // 'cachePath'=> '/protected/runtime/cache/test',
        ),

        "cache" => array(
			"class" => "CMemCache",
            'useMemcached'=>false, //使用memcache，不使用memcached
			"servers" => array(
				array("host" => "127.0.0.1","port" => "11211","weight" => 1),
			),
		),
        //邮件发送
        'mailer' => array(
            'class' => 'application.extensions.mailer.EMailer',
            'pathViews' => 'application.views.email',
            'pathLayouts' => 'application.views.email.layouts'
        ),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'siteurl'=>'http://lily.local:8888/carambar_03',
		'tag'=>'9263',
		'email' => array(
			'username' => 'fuelitupdev@gmail.com',
			'password' => 'shanghaitest',
			'sendName' => 'Carambar',
			'titleNew' => 'Good Luck Carambar : Nouvel upload de soutien',
			'titleAward' => '#CARAMBARGOODLUCK You win!',
			'titleApprove' => '#CARAMBARGOODLUCK your post has approved',
			'contentNew' => 'Bonjour,<br/><br/>Un nouveau participant chaud bouillant a upload&#233; un soutien sur la plateforme depuis son compte Facebook. <br/><br/>Viens vite le v&#233;rifier pour publication sur l\'interface back-office de ouf qu\'on a cr&#233;&#233; expr&#232;s : http://www.goodluckcarambar.com/admin<br/><br/>La bise,',
			'contentAward' => 'Dear<br/>You win!',
			'contentApprove' => 'Dear<br/>Your post has approved!',
			'emailList' => array('dev@fuel-it-up.com','tony@fuel-it-up.com')
		)
	),
);