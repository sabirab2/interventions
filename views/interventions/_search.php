<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InterventionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interventions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?= $form->field($model, 'name') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?= $form->field($model, 'code') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?= $form->field($model, 'date_intervention') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?= $form->field($model, 'created_at') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?php  echo $form->field($model, 'updated_at') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?php  echo $form->field($model, 'type_id') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?php  echo $form->field($model, 'correspondant_id') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?php  echo $form->field($model, 'lieu_id') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?php  echo $form->field($model, 'machine_id') ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?php  echo $form->field($model, 'is_deleted') ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
