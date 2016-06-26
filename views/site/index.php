<?php

/* @var $this yii\web\View */

$this->title = 'Acceuil | Interventionss';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Gestion des interventions</h1>

        <p class="lead">chi phrase</p>

<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a class="ui button massive" href="<?= Yii::$app->urlManager->createUrl('/interventions/index') ?>">
                       <i class="fa fa-list"></i> <?= Yii::t('app','Interventions')?>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a class="ui button massive" href="<?= Yii::$app->urlManager->createUrl('/machines/index') ?>">
                      <i class="fa fa-desktop"></i>  <?= Yii::t('app','Machines')?>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a class="ui button massive" href="<?= Yii::$app->urlManager->createUrl('/parametres/index') ?>">
                     <i class="fa fa-cogs"></i>   <?= Yii::t('app','Parametres')?>
                    </a>
                </div>
            </div>
        </div>


    </div>

    <!--<div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>-->
</div>
