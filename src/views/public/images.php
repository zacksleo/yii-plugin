<?php
  $Model = empty($Model) ? 'Model':$Model;
?>
<div class="tab-pane form-horizontal" id="tab-images">
  <?php if($model->hasAttribute('icon_image')): ?>
    <div class="form-body">
      <div class="form-group">
        <label class="control-label col-md-2">小图标预览</label>
        <div class="col-md-10">
          <div class="prev-box">    
            <div class="box"  id="icon_image">  
            </div>
          </div>   
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2"><?php echo $model->getAttributeLabel('icon_image') ?></label>
        <div class="col-md-10">
          <div preview="icon_image" class="logo_image_select_box input-box">
            <input class="filename form-control inline-block" style='width:33%;' type="text" value="<?php echo Gallery::getFilename($model->icon_image); ?>"/>
            <input name="<?php echo $Model;?>[icon_image]" class="sign" type="hidden" value="<?php echo $model->icon_image; ?>"/>
            <a class="btn btn-default image-choosen-button"><i class="fa fa-picture-o fa-fw"></i>浏览图库</a>
            <a id="logo_image_button" class="uploadify-image" filename="<?php echo $this->id; ?>">上传图片</a>
            <a class="preview-button"></a>
          </div>  
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if($model->hasAttribute('logo_image')): ?>
    <div class="form-body">
      <div class="form-group">
        <label class="control-label col-md-2">封面预览</label>
        <div class="col-md-10">
          <div class="prev-box">		
            <div class="box"  id="logo_image">	
            </div>
          </div>   
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">封面</label>
        <div class="col-md-10">
          <div preview="logo_image" class="logo_image_select_box input-box">
            <input class="filename form-control inline-block" style='width:33%;' type="text" value="<?php echo Gallery::getFilename($model->logo_image); ?>"/>
            <input name="<?php echo $Model;?>[logo_image]" class="sign" type="hidden" value="<?php echo $model->logo_image; ?>"/>
            <a class="btn btn-default image-choosen-button"><i class="fa fa-picture-o fa-fw"></i>浏览图库</a>
            <a id="logo_image_button" class="uploadify-image" filename="<?php echo $this->id; ?>">上传图片</a>
            <a class="preview-button"></a>
          </div>  
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if($model->hasAttribute('cover_image')): ?>
    <div class="form-body">
      <div class="form-group">
        <label class="control-label col-md-2">组图预览</label>
        <div class="col-md-10">
          <div class="prev-box">		
            <div class="box"  id="cover_image">	
            </div>
          </div>   
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2"><?php echo $model->getAttributeLabel('cover_image') ?></label>
        <div class="col-md-10">
          <div preview="cover_image" class="cover_image_select_box input-box">
            <input class="filename form-control inline-block" style='width:33%;' type="text" value="<?php echo Gallery::getFilename($model->cover_image); ?>"/>
            <input name="<?php echo $Model;?>[cover_image]" class="sign" type="hidden" value="<?php echo $model->cover_image; ?>"/>
            <a class="btn btn-default image-choosen-button"><i class="fa fa-picture-o fa-fw"></i>浏览图库</a>
            <a id="cover_image_button" class="uploadify-image" filename="<?php echo $this->id; ?>">上传图片</a>
            <a class="preview-button"></a>
          </div>  
        </div>
      </div>
    </div>
  <?php endif; ?>


</div>