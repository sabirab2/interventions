<?php
/**
 * Created by PhpStorm.
 * User: ITRI
 * Date: 24/06/2016
 * Time: 23:19
 */

namespace app\assets;

use yii\web\AssetBundle;

class SemanticAsset extends AssetBundle
{
    public $sourcePath = '@bower/semantic/dist';
    public $css = [
        'css/semantic.min.css',
    ];
    /*public $publishOptions = [
        'only' => [
            'fonts/',
            'css/',
        ]
    ];*/
}