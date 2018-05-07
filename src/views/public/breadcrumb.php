<?php
/* @var $this HomeController */
?>
<?php if(!empty($this->breadcrumbs)):?>
<div class="page-bar">
  <?php
  $this->widget('zii.widgets.CBreadcrumbs', array(
      'links' => $this->breadcrumbs,
      'homeLink' => '<li>
          <i class="fa fa-home"></i>
          <a href="'.$this->createUrl('default/index').'">首页</a>
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
<?php endif;?>