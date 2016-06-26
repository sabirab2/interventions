<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Machines */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="machines-form">


    <?php $form = ActiveForm::begin(); ?>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 's_n')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'collaborator_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'adr_mac_lan')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'adr_ip')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Informations materiels</h3>
            </div>
            <div class="panel-body">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                <?= $form->field($model, 'Alimentation')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'cable')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'hdd')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'ram')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'carte_mere')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?= $form->field($model, 'lecteur')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?= $form->field($model, 'ventilateur')->textInput(['maxlength' => true]) ?>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Informations Logiciels</h3>
            </div>
            <div class="panel-body">
                <div class="row" style="margin-top: 29px !important;">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        Bios
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="radio" style="margin-top: 0;margin-bottom: 0"><label><input value="1" type="radio" name="Machines[bios]" id="">OK</label> &nbsp;&nbsp;
                        <label><input value="0" type="radio" name="Machines[bios]" id="">KO </label></div>
                    </div>
                </div>

                <div class="row" style="margin-top: 29px !important;">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        OS
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="radio" style="margin-top: 0;margin-bottom: 0"><label><input value="1" type="radio" name="Machines[os]" id="">OK</label> &nbsp;&nbsp;
                        <label><input value="0" type="radio" name="Machines[os]" id="">KO </label></div>
                    </div>
                </div>

                <div class="row" style="margin-top: 29px !important;">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        Antiviruss
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="radio" style="margin-top: 0;margin-bottom: 0"><label><input value="1" type="radio" name="Machines[antivirus]" id="">OK</label> &nbsp;&nbsp;
                        <label><input value="0" type="radio" name="Machines[antivirus]" id="">KO </label></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 29px !important;">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        CPU
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="radio" style="margin-top: 0;margin-bottom: 0"><label><input value="1" type="radio" name="Machines[cpu]" id="">OK</label> &nbsp;&nbsp;
                        <label><input value="0" type="radio" name="Machines[cpu]" id="">KO </label></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 29px !important;">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        Registre
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="radio" style="margin-top: 0;margin-bottom: 0"><label><input value="1" type="radio" name="Machines[registre]" id="">OK</label> &nbsp;&nbsp;
                        <label><input value="0" type="radio" name="Machines[registre]" id="">KO </label></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 29px !important;">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        Autres config
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="radio" style="margin-top: 0;margin-bottom: 0"><label><input value="1" type="radio" name="Machines[autre_config]" id="">OK</label> &nbsp;&nbsp;
                        <label><input value="0" type="radio" name="Machines[autre_config]" id="">KO </label></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
