<?php $homeUrl = Yii::app()->homeUrl;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Wave Cloud</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap-modal.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap-slider.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/box-extend.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/DT_bootstrap.css" rel="stylesheet">
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap-modal.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap-modalmanager.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap-slider.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap-tab.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dataTables.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/DT_bootstrap.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo $homeUrl.'/site/index'; ?>">Wave Cloud</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <a href="<?php echo $homeUrl.'/user/index'; ?>" class="navbar-link">用户中心</a>
                            <a href="<?php echo $homeUrl.'/site/logout'; ?>" class="navbar-link">登出</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="row-fluid">
                <div class="span2">
                    <ul class="nav nav-pills nav-stacked" id="main-menu">
                        <li class="active" id="site"><a href="<?php echo $homeUrl.'/site'; ?>">概览</a></li>
                        <li id="vm"><a href="<?php echo $homeUrl.'/vm'; ?>">虚拟机管理</a></li>
                        <li id="pm"><a href="<?php echo $homeUrl.'/pm'; ?>">物理机管理</a></li>
                        <li id="template"><a href="<?php echo $homeUrl.'/template'; ?>">模板管理</a></li>
                        <li id="net"><a href="<?php echo $homeUrl.'/net'; ?>">网络管理</a></li>
                        <li id="iso"><a href="<?php echo $homeUrl.'/iso'; ?>">镜像管理</a></li>
                    </ul>
                </div>
                <?php echo $content;?>
            </div>
        </div>
        <div class="load-mask" id="load-mask"></div>
        <div class="loading-box" id="loading-box">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loading.gif" width="32" height="32" />
            <span>数据正在加载中...,请稍后</span>
        </div>
    </body>
</html>
<script type="text/javascript">
$(function(){
    $("#main-menu li").removeClass('active');
    var url = window.location.href;
    var homeUrl = "<?=$homeUrl?>";
    var ptype = url.split(homeUrl);
    var active = ptype[1];
    var atype = active.split('/');
    $("#"+atype[1]).addClass('active');
})
</script>
