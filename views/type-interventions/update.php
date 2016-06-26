<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeInterventions */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Type Interventions',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Type Interventions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="type-interventions-update">

    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
