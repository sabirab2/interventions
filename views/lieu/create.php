<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lieu */

$this->title = Yii::t('app', 'Create Lieu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lieus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lieu-create">

    <div class="panel panel-primary">
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
