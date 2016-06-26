<?php
/**
 * Created by PhpStorm.
 * User: ITRI
 * Date: 24/06/2016
 * Time: 23:19
 */

namespace app\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/components-font-awesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
    public $publishOptions = [
        'only' => [
            'fonts/',
            'css/',
        ]
    ];
}