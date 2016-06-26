<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Correspondants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correspondants-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
