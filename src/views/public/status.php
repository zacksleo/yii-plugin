<div class="row">
  <div class="col-md-6">
    <label class="col-md-3 control-label">状态</label>
    <div class="col-md-8">
      <div class="checkbox-list">
        <?php if($model->hasAttribute('is_display')): ?>
        <label class="checkbox-inline">
          <input type="hidden" name="Model[is_display]" value="0">
          <input class="uniform-checkbox" type="checkbox" name="Model[is_display]" value="1"
          <?php echo $model->isNewRecord || $model->is_display == 1 ? 'checked' : ''; ?>>显示
        </label>
        <?php endif; ?>
        <?php if($model->hasAttribute('is_elect')): ?>
        <label class="checkbox-inline">
          <input type="hidden" name="Model[is_elect]" value="0">
          <input class="uniform-checkbox" type="checkbox" name="Model[is_elect]" value="1"
          <?php echo !$model->isNewRecord && $model->is_elect == 1 ? 'checked' : ''; ?>>推荐
        </label>
        <?php endif; ?>
        <?php if($model->hasAttribute('is_bargain')): ?>
        <label class="checkbox-inline">
          <input type="hidden" name="Model[is_bargain]" value="0">
          <input class="uniform-checkbox" type="checkbox" name="Model[is_bargain]" value="1"
          <?php echo !$model->isNewRecord && $model->is_bargain == 1 ? 'checked' : ''; ?>>特价
        </label>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>