<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InterventionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Interventions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interventions-index">

    <h1><?= Html::encode($this->title) ?></h1>

        <div class="panel panel-info">
        	  <div class="panel-heading advanced-search" style="cursor: pointer">
        			<span class="panel-title "><i class="fa fa-search"></i>  <?= Yii::t('app','Advanced search') ?></span>
                  <span class="search-box pull-right"><i class="af fa fa-plus"></i></span>
        	  </div>
        	  <div class="panel-body advanced-search-body">
                  <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

              </div>
        </div>


    <p>
        <?= Html::a(Yii::t('app', 'Create Interventions'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'code',
            'date_intervention',
            'created_at',
             'updated_at',
            // 'type_id',
            // 'correspondant_id',
            // 'lieu_id',
            // 'machine_id',
            [
                'attribute' => 'is_deleted',
                'format' => 'html',
                'value' => function($data){
                    return $data->is_deleted == 1 ? '<i class="fa fa-circle text-danger"></i>':'<i class="fa fa-circle text-success"></i>';
                }
            ],

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{save-pdf} {view} {update} {delete}',
                'buttons' => [
                    'save-pdf' => function ($url,$model) {
                        return !$model->is_deleted ? Html::a('<span class="fa fa-download"></span>',
                            $url,
                            [
                                'title' => Yii::t('app','Download'),
                                'data-pjax' => '0',
                            ]
                        ) : '';
                    },
                ],
            ],
        ],
    ]); ?>
</div>

