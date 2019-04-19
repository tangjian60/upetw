<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = '杭州尤宠屋管理后台系统';
Yii::$app->name = '后台系统';
?>
<div class="site-index">
	<div class="list-group" style="width:20%;">
        <!-- 用户管理 -->
        <a class="list-group-item" data-toggle="collapse" href="#usercollapse" aria-expanded="false" aria-controls="collapseExample">用户管理<span class="caret"></span></a>
        <div class="collapse" id="usercollapse">
            <div class="well">
                <div class="list-group">
                    <a href="<?= Url::toRoute(['user/index'])?>" class="list-group-item">用户列表</a>
                    <a href="<?= Url::toRoute(['user/manualuser'])?>" class="list-group-item">用户列表</a>
                </div>
            </div>
        </div>
        <!-- 权限管理 -->
        <a class="list-group-item" data-toggle="collapse" href="#resourcecollapse" aria-expanded="false" aria-controls="collapseExample">资源管理<span class="caret"></span></a>
        <div class="collapse" id="resourcecollapse">
            <div class="well">
                <div class="list-group">
                    <a href="<?= Url::toRoute(['user/index'])?>" class="list-group-item">用户列表</a>
                    <a href="<?= Url::toRoute(['user/index'])?>" class="list-group-item">用户列表</a>
                </div>
            </div>
        </div>
    </div>
</div>
