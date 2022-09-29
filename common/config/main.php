<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
	'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
	'urlManager' => [
	    //'class' => 'yii\web\UrlManager',
	    'enablePrettyUrl' => true,
            //Guarda el Index.php
	    'showScriptName' => false,
	    //'enableStrictParsing' => true,
	    'rules' => [
   	        //'<alias:\w+>' => 'site/<alias>',
	    ],
    	],
    ],
];
