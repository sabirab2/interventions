<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MachinesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Machines');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machines-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Machines'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            's_n',
            'collaborator_name',
            'adr_mac_lan',
             'adr_ip',
             'created_at',
             'updated_at',
            [
                'attribute' => 'is_deleted',
                'format' => 'html',
                'value' => function($date){
                    return $date->is_deleted == 1 ? '<i class="fa fa-circle text-danger"></i>':'<i class="fa fa-circle text-success"></i>';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
