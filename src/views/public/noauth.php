<?php if(Yii::app()->request->isAjaxRequest): ?>
  <?php if(Yii::app()->request->isPostRequest): ?>
    <?php
    echo json_encode(array(
        'success'=>false,
        'errorMessage'=>'您没有权限！'
    ));
    ?>
  <?php else: ?>
    <div class="note note-danger">
      <h4 class="block">您没有权限！</h4>								
    </div>
  <?php endif; ?>

<?php else: ?>    
  <script>
    alert("您没有权限访问该模块");
    window.location = "<?php echo $this->createUrl('default/index') ?>";
  </script>
<?php endif; ?>
    

