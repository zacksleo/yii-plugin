<?php
/* @var $vo AdminCpCatalog */
$data = AdminCpCatalog::model()->getCatalog();
$nav = Yii::app()->request->cookies['ez-admin-nav'];
$fid = $id = null;
if(!empty($nav) && $nav->value){
  $array = explode('-', $nav->value);
  $fid = $array[0];
  $id = $array[1];
}
?>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
  <div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
		<?php /*
      <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
        </div>
      </li>
			*/
			?>
      <li class="start <?php echo!empty($nav->value) && $nav->value == 0 ? 'active' : ''; ?>">
        <a class="ez-nav ajaxify" id="ez-nav-link-0" data-id="0" href="<?php echo $this->createUrl('/admin/default/index'); ?>">
          <i class="fa fa-dashboard"></i>
          <span class="title">首页</span>
          <span class="selected"></span>
        </a>
      </li>
      <?php foreach($data['list'] as $vo): ?>
        <li class="heading">
          <h3 class="uppercase"><?php echo $vo['title']; ?></h3>
        </li>
        <?php foreach($vo['list'] as $vo2): ?>
          <li class="<?php echo!empty($fid) && $fid == $vo2['id'] ? 'active open' : ''; ?>">
            <a href="javascript:;">
              <i class="<?php echo $vo2['icon'] ?>"></i>
              <span class="title"><?php echo $vo2['title']; ?></span>
              <span class="selected"></span>
              <span class="arrow <?php echo!empty($fid) && $fid == $vo2['id'] ? 'open' : ''; ?>"></span>
            </a>
            <ul class="sub-menu" style="<?php echo!empty($fid) && $fid == $vo2['id'] ? 'display:block;' : ''; ?>">
              <?php foreach($vo2['list'] as $vo3): ?>
                <li class="ez-nav-li <?php echo!empty($id) && $id == $vo3['id'] ? 'active' : ''; ?>">
                  <?php if($vo3['is_target_blank'] == 1): ?>
                    <a title="<?php echo $vo['title']; ?>-<?php echo $vo2['title']; ?>-<?php echo $vo3['title']; ?>" target="_blank" href="<?php echo $vo3['url']; ?>">
                      <i class="<?php echo $vo3['icon'] ?>"></i>
                      <?php echo $vo3['title']; ?>
                    </a>
                  <?php elseif(strpos($vo3['url'], 'http://') === 0): ?>
                    <a class="ez-nav " id="ez-nav-link-<?php echo $vo3['id']; ?>" data-id="<?php echo $vo2['id']; ?>-<?php echo $vo3['id']; ?>" href="<?php echo $vo3['url']; ?>">
                      <i class="<?php echo $vo3['icon'] ?>"></i>
                      <?php echo $vo3['title']; ?>
                    </a>
                  <?php else: ?>
                    <a title="<?php echo $vo['title']; ?>-<?php echo $vo2['title']; ?>-<?php echo $vo3['title']; ?>" class="ez-nav ajaxify" id="ez-nav-link-<?php echo $vo3['id']; ?>" data-id="<?php echo $vo2['id']; ?>-<?php echo $vo3['id']; ?>" href="<?php echo $vo3['url']; ?>">
                      <i class="<?php echo $vo3['icon'] ?>"></i>
                      <?php echo $vo3['title']; ?></a>
                  <?php endif; ?>  
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </ul>
  </div>
</div>