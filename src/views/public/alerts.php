<?php if(Yii::app()->admin->hasFlash('success')): ?>
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">关闭</span>
    </button>
    <strong><i class="fa fa-check-circle fa-fw fa-lg"></i></strong> <?php echo Yii::app()->admin->getFlash('success'); ?>
  </div>
<?php endif; ?>
<?php if(Yii::app()->admin->hasFlash('failed')): ?>
  <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">关闭</span>
    </button>
    <strong><i class="fa fa-warning fa-fw fa-lg"></i></strong> <?php echo Yii::app()->admin->getFlash('failed'); ?>
  </div>
<?php endif; ?>

