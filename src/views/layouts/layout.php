<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title><?php echo Yii::app()->name; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link href="/vendor/bower-asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="/vendor/bower-asset/bootstrap/dist/css/bootstrap.min.css">
    <link href="/vendor/bower-asset/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="/vendor/zacksleo/metronic/global/css/components-md.min.css">
    <link type="text/css" rel="stylesheet" href="/vendor/zacksleo/metronic/global/css/plugins-md.min.css">
    <link type="text/css" rel="stylesheet" href="/vendor/zacksleo/metronic/layouts/layout/css/layout.min.css">
    <link type="text/css" rel="stylesheet" href="/vendor/zacksleo/metronic/layouts/layout/css/themes/darkblue.min.css">
    <link type="text/css" rel="stylesheet" href="/vendor/zacksleo/metronic/layouts/layout/css/custom.min.css">
    <link type="text/css" rel="stylesheet" href="/vendor/zacksleo/easyui-metronic-theme/easyui.css">
    <link rel="shortcut icon" type="image/x-icon" href="/public/assets/favicon.png" id="favicon"/>
    <style>
        .select2-container {
            z-index: 999999;
        }

        .page-header.navbar.navbar-fixed-top, .page-header.navbar.navbar-static-top {
            /* z-index: 9000; */
        }
    </style>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="/favicon.ico"/>
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">

<?php $this->renderPartial('/public/header') ?>
<div class="page-container">
    <?php $this->renderPartial('/layouts/sidebar') ?>
    <div class="page-content-wrapper">
        <div class="page-content" style="background-color: #fff;">
            <div class="page-content-body" style="min-height: 550px;">
                <?php echo $this->renderPartial('/public/breadcrumb'); ?>
                <?php echo $this->renderPartial('/public/alerts'); ?>
                <?php echo $content; ?>
            </div>
            <div style="position: fixed; z-index: 3000; right: 10px; bottom: 30px" id="upload-image-list"></div>
            <div id="dd"></div>
            <div id="gallery"></div>
            <div id="win"></div>
            <div id="dlg"></div>
        </div>
    </div>
</div>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript" src="/vendor/bower-asset/kimifdw-jquery-easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/public/sea-modules/seajs/sea.js?1233345"></script>
<script>
    seajs.config({
        base: "<?php echo __PUBLIC__; ?>/sea-modules/",
        alias: {
            'ez': 'ez/ez/3.2.12/ez.js',
            'storage': 'ez/storage/1.1/storage.js',
            'metronic': 'metronic/4.0.1/metronic.js',
            'moment': '/vendor/bower-asset/moment/min/moment.min.js',
            'layout': 'metronic/4.0.1/layout.js',
            'admin': 'ez/abroad/2.5/admin.js?v=20180309',
            'common': 'ez/abroad/2.5/common.js'
        },
        vars: {
            'locale': 'zh_cn'
        },
        preload: ['ez', 'common', 'admin', 'moment'],
        debug:<?php echo YII_DEBUG ? 'true' : 'false'?>
    });
    var KindEditor;
    var PUBLIC = '<?php echo __PUBLIC__ ?>/';
    var ROOT = '<?php echo __ROOT__ ?>/';
    var GROUP = '<?php echo __GROUP__; ?>';
    var uploadUrl = GROUP + "/upload/image";    //图片上传控制器
    var swfUrl = "/public/sea-modules/uploadify/3.2/uploadify.swf";   //图片上传swf路径
    var SWFUpload;
    var uploader = GROUP + '/upload/'; //文件上传控制器
    var sessionId = <?php echo Yii::app()->admin->id; ?>;    //用户uid
    var timestamp = 0;    //时间戳
    var error = false;
    var host = "<?php echo $_SERVER['SERVER_NAME'] ?>"; //服务器主机ip地址
    var localStorageControl =<?php echo LocalStorageControl::model()->getCombobox('id,name,update_time,url'); ?>;//本地数据缓存控制
    var WWW_DOMAIN = '/';
    seajs.use(['app/common/layouts/main', 'app/admin/public/sidebar']);

</script>
</body>
</html>