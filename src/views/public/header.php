<?php
/**
 * 待办事项
 */
?>
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
      <h4><small class="font-white"><?php echo Config::model()->getValue('system_name'); ?></small></h4>
      <div class="menu-toggler sidebar-toggler hide">
      </div>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
      <ul class="nav navbar-nav pull-right">  
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-user">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img alt="" class="img-circle" src="<?php echo Yii::app()->admin->logo_image; ?>"/>
            <span class="username username-hide-on-mobile">
              <?php echo Yii::app()->admin->name; ?> </span>
            <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-default">
            <li>
              <a href="<?php echo $this->createUrl('account/edit'); ?>">
                <i class="fa fa-user-md"></i> 我的账号 </a>
            </li>
            <li>
              <a href="<?php echo $this->createUrl('inbox/index')?>">
                <i class="fa fa-envelope"></i> 我的消息 
                <?php if(!empty($total)):?>
                <span class="badge badge-danger">
                <?php echo $total;?>   </span>
                <?php endif;?>
              </a>
            </li>
            <li>
              <a href="<?php echo $this->createUrl('tasks/main'); ?>">
                <i class="fa fa-check-circle"></i> 待办事项 <span class="badge badge-success">
                  <?php echo $data['tasks']['total']; ?> </span>
              </a>
            </li>
            <li class="divider">
            </li>
            <li>
              <a href="<?php echo $this->createUrl('default/logout'); ?>">
                <i class="fa fa-key"></i> 注销 </a>
            </li>
          </ul>
        </li>
        <li>
          <a target="_blank" href="<?php echo $this->createUrl('/site/index'); ?>" class="dropdown-toggle">
            <i class="mdi mdi-home mdi-24px"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>