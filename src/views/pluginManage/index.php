<?php
use zacksleo\yii\plugin\libs\PluginManger;

if (!array_key_exists('bootstrap.js', Yii::app()->clientScript->packages))
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
?>

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption">
        插件管理
        </div>
    </div>
    <div class="portlet-body">
    <?php foreach ($plugins as $status => $_plugins) :
        if (empty($_plugins))
        continue;
    ?>
        <div id="tbl-plugins">
            <?php
            switch ($status) :
                case PluginManger::STATUS_Enabled:
                echo '<h4 class="text-success">' . Yii::t("plugin", "Enabled Plugins") . ': </h4>';
                break;
            case PluginManger::STATUS_Installed:
                echo '<h4 class="text-warning">' . Yii::t("plugin", "Disabled Plugins") . ': </h4>';
                break;
            case PluginManger::STATUS_NotInstalled:
                echo '<h4 class="text-info">' . Yii::t("plugin", "Not Installed Plugins") . ': </h4>';
                break;
            endswitch;
            ?>
            <br/>
            <?php foreach ($_plugins as $plugin) : ?>
                <div class="row">
                    <div class="col-md-1">
                            <img class="img-responsive" src="<?php echo $plugin['plugin']->Icon() ? $plugin['plugin']->Icon() : $this->defaultIcon; ?>" />
                    </div>
                    <div class="col-md-4">
                        <div class="plg-name"> <?php echo $plugin['plugin']->name; ?>
                            (Ver:<?php echo $plugin['plugin']->version; ?>)
                        </div>
                        <div class="plg-id"><?php echo $plugin['plugin']->identify; ?></div>
                        <div class="plg-cp"><a
                            href="<?php echo $plugin['plugin']->website; ?>"><?php echo $plugin['plugin']->copyright; ?></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                        <em>
                        <?php echo Yii::t("plugin", "Description"); ?>: </em><?php echo $plugin['plugin']->description; ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-right">
                            <?php
                            switch ($status) :
                                case PluginManger::STATUS_Enabled:
                                ?>
                            <a class="btn btn-xs btn-link p_disable" 
                                title="<?php echo Yii::t("plugin", 'Disable'); ?>" 
                                data-id="<?php echo $plugin['plugin']->identify; ?>">
                                <i class="fa fa-pause fa-2x"></i>
                            </a>

                            <a class="btn btn-xs btn-link" 
                                title="<?php echo Yii::t("plugin", 'Setting'); ?>" 
                                href="<?php echo $this->createUrl('/plugin/pluginManage/setting', array('id' => $plugin['plugin']->identify)); ?>" 
                            >
                                <i class="fa-cogs fa-2x"></i>
                            </a>					

                            <a class="btn btn-xs btn-link p_uninstall" 
                                title="<?php echo Yii::t("plugin", 'Uninstall'); ?>" 
                                data-id="<?php echo $plugin['plugin']->identify; ?>" >
                                <i class="fa fa-trash fa-2x"></i>
                            </a>
                            <?php
                            break;
                        case PluginManger::STATUS_Installed:
                            ?>
                            <a class="btn btn-xs btn-link p_enable" 
                                title="<?php echo Yii::t("plugin", 'Enable'); ?>" 
                                data-id="<?php echo $plugin['plugin']->identify; ?>">
                                <i class="fa fa-play fa-2x" rel="tooltip"></i>
                            </a>

                            <a class="btn btn-xs btn-link" 
                                title="<?php echo Yii::t("plugin", 'Setting'); ?>" 
                                href="<?php echo $this->createUrl('/plugin/pluginManage/setting', array('id' => $plugin['plugin']->identify)); ?>" >
                                <i class="fa fa-cogs fa-2x"></i>
                            </a>						
                            <a class="btn btn-xs btn-link p_uninstall" 
                                title="<?php echo Yii::t("plugin", 'Uninstall'); ?>" 
                                data-id="<?php echo $plugin['plugin']->identify; ?>">
                                <i class="fa fa-trash fa-2x"></i>
                            </a>
                            <?php
                            break;
                        case PluginManger::STATUS_NotInstalled:
                            ?>
                            <a 
                                class="btn btn-xs btn-link p_install" 
                                title="<?php echo Yii::t("plugin", 'Install'); ?>" 
                                data-id="<?php echo $plugin['plugin']->identify; ?>">
                                    <i class="fa fa-download fa-2x" rel="tooltip"></i>
                            </a>
                            <?php
                            break;
                        endswitch;
                        ?>
                            <a class="btn btn-xs btn-link" 
                                title="<?php echo Yii::t("plugin", 'View'); ?>" >
                                <i class="fa fa-eye fa-2x" rel="tooltip"></i>
                            </a>
                        </div>
                    </div>
                    <div style="clear:both;"></div> 
                    <hr/>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        </div>
</div>
</div>


<?php 
$script = 'jQuery(".p_install").click(function(){
        jQuery.post("' . $this->createUrl("/plugin/pluginManage/install") . '",{id:jQuery(this).data("id")},function(data){
            if(data.status){
                window.location.reload();
            }
        },"json");
});
jQuery(".p_uninstall").click(function(){
    if(confirm("' . Yii::t("plugin", "Plugin data will be removed after uninstall, sure to uninstall?") . '")==true){
        jQuery.post("' . $this->createUrl("/plugin/pluginManage/uninstall") . '",{id:jQuery(this).data("id")},function(data){
            if(data.status){
                window.location.reload();
            }
        },"json");
    }else{
        jQuery(this).mouseout();
    }
});
jQuery(".p_enable").click(function(){
    jQuery.post("' . $this->createUrl("/plugin/pluginManage/enable") . '",{id:jQuery(this).data("id")},function(data){
        if(data.status){
            window.location.reload();
        }
    },"json");
});
jQuery(".p_disable").click(function(){
    jQuery.post("' . $this->createUrl("/plugin/pluginManage/disable") . '",{id:jQuery(this).data("id")},function(data){
        if(data.status){
            window.location.reload();
        }
    },"json");
});';

Yii::app()->request->isAjaxRequest ? print "<script>$script</script>" : Yii::app()->clientScript->registerScript('auth_cp_1', $script, CClientScript::POS_END);
?>
