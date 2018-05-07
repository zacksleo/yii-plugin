<?php

/* @var $this HomeController */
$this->widget('CLinkPager', array(
    'header' => '',
    'firstPageLabel' => '首页',
    'lastPageLabel' => '末页',
    'prevPageLabel' => '<i class="fa fa-angle-left"></i>',
    'nextPageLabel' => '<i class="fa fa-angle-right"></i>',
    'pages' => $data['pages'],
    'maxButtonCount' => 2,
    'selectedPageCssClass' => 'active',
    'hiddenPageCssClass' => 'disabled',
    'htmlOptions' => array(
        'class' => 'pagination ',
    ),
        )
);
?>   