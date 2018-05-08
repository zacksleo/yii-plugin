<?php

namespace zacksleo\yii\plugin\libs;

use zacksleo\yii\plugin\models\Plugins;

class PluginManger
{
    protected $pluginCache;
    const STATUS_NotInstalled = 0;
    const STATUS_Installed = 1;
    const STATUS_Enabled = 2;

    public function Install($plugin)
    {
        if (!$this->AssertPlugin($plugin)) {
            return false;
        }
        if (!$plugin->Install()) {
            return false;
        }
        if (!$this->RegisterPlugin($plugin)) {
            return false;
        }
        return true;
    }

    public function Uninstall($plugin)
    {
        if (!$plugin->Uninstall() && !$plugin->clear()) {
            return false;
        }
        if (!$this->UnregisterPlugin($plugin)) {
            return false;
        }
        return true;
    }

    public function Enable($plugin)
    {
        $pluginModel = $this->loadModel()->findByAttributes(array('identify' => $plugin->identify));
        if (!$pluginModel) {
            return false;
        }
        $pluginModel->enable = 1;
        return $pluginModel->update(array('enable'));
    }

    public function Disable($plugin)
    {
        $pluginModel = $this->loadModel()->findByAttributes(array('identify' => $plugin->identify));
        if (!$pluginModel) {
            return false;
        }
        $pluginModel->enable = 0;
        return $pluginModel->update(array('enable'));
    }

    public function Status($plugin)
    {
        $plugin = $this->loadModel()->findByAttributes(array('identify' => $plugin->identify));
        if (!$plugin) {
            return self::STATUS_NotInstalled;
        } elseif ($plugin->enable) {
            return self::STATUS_Enabled;
        } else {
            return self::STATUS_Installed;
        }
    }

    protected function RegisterPlugin($plugin)
    {
        $model = $this->loadModel();
        $model->identify = $plugin->identify;
        $model->path = $plugin->pluginDir;
        $model->hooks = serialize($plugin->Hooks());
        if (!$model->save()) {
            return false;
        }
        return true;
    }

    protected function UnregisterPlugin($plugin)
    {
        $model = $this->loadModel();
        $row = $model->deleteAllByAttributes(array('identify' => $plugin->identify));
        if ($row) {
            return true;
        }
    }

    protected function AssertPlugin($plugin)
    {
        $hooks = $plugin->Hooks();
        $r1 = !empty($hooks);
        $r2 = $plugin->identify ? true : false;
        $r3 = !$this->Status($plugin);
        $r4 = !$this->loadModel()->findByAttributes(array('identify' => $plugin->identify));
        return $r1 && $r2 && $r3 && $r4;
    }

    protected function loadModel()
    {
        return new Plugins();
    }
}
