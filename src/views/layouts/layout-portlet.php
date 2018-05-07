<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/layout'); ?>
    <div class="portlet light">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-puzzle font-grey-gallery"></i>
                <span class="caption-subject bold font-grey-gallery uppercase"> <?= $this->pageTitle; ?> </span>
                <span class="caption-helper"> <?= $this->subhead; ?></span>
            </div>
            <?php if (!empty($this->menu)): ?>
                <div class="actions">
                    <?= BsHtml::buttonDropdown('管理菜单', $this->menu, [
                        'split' => false,
                        'size' => BsHtml::BUTTON_SIZE_SMALL,
                        'color' => BsHtml::BUTTON_COLOR_LINK
                    ]);
                    ?>
                    <a class="btn btn-link btn-icon-only btn-default fullscreen" href="javascript:;"
                       data-original-title="" title=""> </a>
                </div>

            <?php endif; ?>
        </div>
        <div class="portlet-body" style="display: block;min-height:600px;">
            <?php echo $content; ?>
        </div>
    </div>
<?php $this->endContent(); ?>