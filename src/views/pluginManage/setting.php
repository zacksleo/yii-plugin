<div class="page-bar">
  <?php
  $this->widget('zii.widgets.CBreadcrumbs', array(
      'links' => array(
        '插件中心'=>array('/plugin/pluginManage'),
        $name =>'javascript:',
        Yii::t('plugin', 'Setting')
        ),
      'homeLink' => '<li>
          <i class="fa fa-home"></i>
          <a href="'.$this->createUrl('/admin/default/index').'">首页</a>
          <i class="fa fa-angle-right"></i>
        </li>',
      'tagName' => 'ul',
      'separator' => '',
      'activeLinkTemplate' => '<li><a href="{url}">{label}</a><i class="fa fa-angle-right"></i></li>',
      'inactiveLinkTemplate' => '<li><span>{label}</span></li>',
      'htmlOptions' => array('class' => 'page-breadcrumb'),
  ));
  ?> 
</div>
<div class="setting-area"><?php echo $content; ?></div>