<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=> 'vi',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'lang*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'on missingTranslation' => ['common\components\TranslationEventHandler', 'handleMissingTranslation']
                ],
                
            ],
        ],
        'urlManager' => 
        [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix'=>'.html',
            //'enableStrictParsing' => true,
            'rules' => [
 
            ],
        ],
       
    ],
  
    'as beforeRequest' => [
        'class' => 'common\components\LanguageHandler',
    ],
    'bootstrap'=>'gii',
    'modules'=>[
        'gii'=>'yii\gii\Module',
    ],
];
