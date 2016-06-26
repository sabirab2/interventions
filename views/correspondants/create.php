<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Correspondants */

$this->title = Yii::t('app', 'Create Correspondants');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Correspondants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correspondants-create">

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
