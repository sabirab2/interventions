<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Interventions */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Interventions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interventions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'code',
            'date_intervention',
            'created_at',
            'updated_at',
            [
                'attribute'=>'type_id',
                 'format' => 'raw',
                'value'=> $model->type->name

            ],
            [
                'attribute'=>'correspondant_id',
                 'format' => 'raw',
                'value'=> $model->correspondant->name

            ],
            [
                'attribute'=>'lieu_id',
                 'format' => 'raw',
                'value'=> $model->lieu->name

            ],
            [
                'attribute'=>'machine_id',
                 'format' => 'raw',
                'value'=> $model->machine->name

            ],

            'is_deleted',
        ],
    ]) ?>

</div>
