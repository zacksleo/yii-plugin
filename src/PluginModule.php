<?php

namespace zacksleo\yii\plugin;

use yii;

class PluginModule extends \CWebModule
{

    public $pluginRoot = 'application.plugins';
    public $layout = '/layouts/layout-portlet';
    public $moduleDir;
    public $controllerNamespace = 'zacksleo\yii\plugin\controllers';

    public function init()
    {
        $this->moduleDir = dirname(__FILE__);
        Yii::setPathOfAlias('pluginModule', $this->moduleDir);
        defined('__ROOT__') or define('__ROOT__', Yii::app()->request->baseUrl);
        defined('__VERSION__') or define('__VERSION__', '1.0.0');
        defined('__GROUP__') or define('__GROUP__', __ROOT__ . '/admin/');
    }
}
