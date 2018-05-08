<?php

namespace zacksleo\yii\plugin;

use yii;

class PluginModule extends \CWebModule
{
    public $pluginRoot = 'application.plugins';
    public $moduleDir;
    public $controllerNamespace = 'zacksleo\yii\plugin\controllers';

    public function init()
    {
        $this->moduleDir = dirname(__FILE__);
        Yii::setPathOfAlias('pluginModule', $this->moduleDir);
        parent::init();
    }
}
