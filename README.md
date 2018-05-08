# yii-plugin

[Yii-Plugin](https://github.com/health901/Yii-Plugin) with Composer implementation

## Quick Start

### Install by Composer

`composer require zacksleo/yii-plugin`

### Config

config in main.php

```
    'modules' => [
        //'admin',
        'plugin' => [
            'class' => 'zacksleo\yii\plugin\PluginModule',
            'layout' => 'layout', // your layout
            'layoutPath' => dirname(__DIR__) . '/modules/admin/views/layouts/', // your layout path
            'pluginRoot' => 'webroot.plugins'
        ]
    ],

    'components'=>[
        //... other config
         'plugin' =>[
             'class' => 'zacksleo\yii\plugin\components\HookRender',
        ],  
    ]

```

### Set Hooks in View

```
<?php Yii::app()->plugin->render('global_footer'); >

```

### More

More docs see [health901/Yii-Plugin](https://github.com/health901/Yii-Plugin)