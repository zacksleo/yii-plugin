<?php
/* @var $this BaseController */
/* @var $model EuiActiveRecord */
/* @var $form CActiveForm */
?>
<form method="post" id="ff-image" class="ym-form linearize-form ym-columnar" style="margin:20px;">
  <fieldset>
    <legend>
      <a><img src="data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" class="tool" width="15px;height:15px;"></a>
      <a>图片</a>
    </legend>
    <?php if($model->hasAttribute('logo_image')): ?>
      <div class="ym-fbox">
        <label for="logo_image">封面预览</label>         
        <div class="prev-box">		
          <div class="box"  id="logo_image">	
          </div>
        </div>         
      </div>    
      <div class="ym-fbox">
        <label title="" class="">封面</label>
        <div preview="logo_image" class="logo_image_select_box input-box">
          <input class="filename" type="text" style="width:200px;" value="<?php echo Gallery::getFilename($model->logo_image) ?>"/>
          <input name="Model[logo_image]" class="sign" type="hidden" value="<?php echo $model->logo_image; ?>"/>
          <a class="btn btn-default image-choosen-button"><i class="fa fa-picture-o fa-fw"></i>浏览图库</a>
          <a id="logo_image_button" class="uploadify-image" filename="<?php echo $this->id; ?>">上传图片</a>
          <a class="preview-button"></a>
        </div>           
      </div>
    <?php endif; ?>
    <?php if($model->hasAttribute('cover_image')): ?>
      <div class="ym-fbox">
        <label for="cover_image">组图预览</label>         
        <div class="prev-box">		
          <div class="box"  id="cover_image">	
          </div>
        </div>         
      </div>    
      <div class="ym-fbox">
        <label title="" class="">组图</label>
        <div preview="cover_image" class="cover_image_select_box input-box">
          <input class="filename" type="text" style="width:200px;" value="<?php echo Gallery::getFilename($model->cover_image); ?>"/>
          <input name="Model[cover_image]" class="sign" type="hidden" value="<?php echo $model->cover_image; ?>"/>
          <a class="btn btn-default image-choosen-button"><i class="fa fa-picture-o fa-fw"></i>浏览图库</a>
          <a id="cover_image_button" class="uploadify-image" filename="<?php echo $this->id; ?>">上传图片</a>
          <a class="preview-button"></a>
        </div>           
      </div>
    <?php endif; ?>
  </fieldset>
  <div class="ym-fbox-footer ym-fbox-button">      
    <a class="btn btn-primary" onclick="ez.form.win.closeSubmit('#ff-image', '<?php echo __SELF__; ?>', '<?php echo __SELF__; ?>')"><i class="fa fa-save fa-fw"></i>保存</a>
    <a class="btn btn-link" onclick="document.getElementById('ff-image').reset()"><i class="fa fa-undo fa-fw"></i>撤销</a>
    <a class="btn btn-link" onclick="$('#dd').window('close');"><i class="fa fa-times fa-fw"></i>关闭</a>
  </div>
</form>
<script>
  seajs.use('uploadify/image', function(app){
    app.run();
  });
</script>