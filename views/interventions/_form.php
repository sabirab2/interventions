<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TypeInterventions;

/* @var $this yii\web\View */
/* @var $model app\models\Interventions */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .ui.icon.input.fluid{
        padding-bottom: 10px !important;
    }
</style>
<div class="interventions-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'date_intervention')->textInput() ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map(TypeInterventions::find()->all(), 'id', 'name')) ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'correspondant_id')->dropDownList(ArrayHelper::map(\app\models\Correspondants::find()->all(), 'id', 'name')) ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'lieu_id')->dropDownList(ArrayHelper::map(\app\models\Lieu::find()->all(), 'id', 'name')) ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?= $form->field($model, 'machine_id')->dropDownList(ArrayHelper::map(\app\models\Machines::find()->all(), 'id', 'name')) ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="ui two column middle aligned very relaxed stackable grid">
            <div class="column" id="action-m-item-container">
                <div class="ui ignored info message">
                	Actions planifiés à verification materiels
                </div>
                <?php if(count($model->actions)<=0) :?>
                <div class="ui icon input fluid">
                    <input placeholder="Action..." type="text" name="Actions[]">
                    <i class="inverted circular plus link icon" id="action-m-item" data-item = "Actions"></i>
                </div>
                <?php else :?>
                    <?php foreach($model->actions as $key=>$action) :?>
                    <div class="ui icon input fluid">
                        <input placeholder="Action..." type="text" value="<?= $action->text ?>" name="Actions[]">

                        <i class="inverted circular<?php if($key == 0) :?> plus <?php else : ?> minus <?php endif;?> link icon" id="action-m-item" data-item = "Actions"></i>

                    </div>
                <?php endforeach ;?>
                <?php endif ;?>
            </div>
            <div class="ui vertical divider">

            </div>
            <div class="column" id="action-l-item-container">
                <div class="ui ignored info message">
                    Actions planifiés à verification Logiciels
                </div>
                <?php if(count($model->actions)<=0) :?>
                <div class="ui icon input fluid">
                    <input placeholder="Action..." type="text" name="Actions[]">
                    <i class="inverted circular plus link icon" id="action-l-item" data-item = "Actions"></i>
                </div>
                <?php else :?>
                    <?php foreach($model->actions as $key=>$action) :?>
                    <div class="ui icon input fluid">
                        <input placeholder="Action..." type="text" value="<?= $action->text ?>" name="Actions[]">

                        <i class="inverted circular<?php if($key == 0) :?> plus <?php else : ?> minus <?php endif;?> link icon" id="action-m-item" data-item = "Actions"></i>

                    </div>
                <?php endforeach ;?>
                <?php endif ;?>
            </div>
        </div>
        <div class="ui divider"></div>

        <div class="ui two column middle aligned very relaxed stackable grid">
            <div class="column" id="tache-item-container">
                <div class="ui ignored info message">
                    Taches réalisés durant l'intervention
                </div>
                <?php if(count($model->taches)<=0) :?>
                <div class="ui icon input fluid">
                    <input placeholder="Tache..." type="text" name="Taches[]">
                    <i class="inverted circular plus link icon" id="tache-item" data-item = "Taches"></i>
                </div>
                <?php else :?>
                    <?php foreach($model->taches as $key=>$tache) :?>
                    <div class="ui icon input fluid">
                        <input placeholder="Action..." type="text" value="<?= $tache->text ?>" name="Taches[]">

                        <i class="inverted circular<?php if($key == 0) :?> plus <?php else : ?> minus <?php endif;?> link icon" id="action-m-item" data-item = "Actions"></i>

                    </div>
                <?php endforeach ;?>
                <?php endif ;?>
            </div>
            <div class="ui vertical divider">

            </div>
            <div class="column" id="observation-item-container">
                <div class="ui ignored info message">
                    Observations planifiés à verification Logiciel
                </div>
                <?php if(count($model->observations)<=0) :?>
                <div class="ui icon input fluid">
                    <input placeholder="Observation..." type="text" name="Observations[]">
                    <i class="inverted circular plus link icon" id="observation-item" data-item = "Observations"></i>
                </div>
                <?php else :?>
                    <?php foreach($model->observations as $key=>$observation) :?>
                    <div class="ui icon input fluid">
                        <input placeholder="Action..." type="text" value="<?= $observation->text ?>" name="Observations[]">

                        <i class="inverted circular<?php if($key == 0) :?> plus <?php else : ?> minus <?php endif;?> link icon" id="action-m-item" data-item = "Actions"></i>

                    </div>
                <?php endforeach ;?>
                <?php endif ;?>
            </div>
        </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 30px">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'ui button teal' : 'ui button primary']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
