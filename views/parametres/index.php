<?php
/* @var $this yii\web\View */
$this->title = Yii::t('app', 'Parametres');
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title ?></h1>

<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2" style="margin-top: 140px">


    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
        <a  href="<?= Yii::$app->urlManager->createUrl('/type-interventions/index') ?>" class="ui button teal large btn-block">
            <i class="fa fa-cog"></i> <?=  Yii::t('app', 'Type Interventions') ?>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">

        <a  href="<?= Yii::$app->urlManager->createUrl('/correspondants/index') ?>" class="ui button teal large btn-block">
            <i class="fa fa-cog"></i> <?=  Yii::t('app', 'Correspondants') ?>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
        <a  href="<?= Yii::$app->urlManager->createUrl('/lieu/index') ?>" class="ui button teal large btn-block">
            <i class="fa fa-cog"></i> <?=  Yii::t('app', 'Lieu') ?>
        </a>
    </div>

</div>