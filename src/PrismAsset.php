<?php
namespace yii2cmf\prism;

use yii\web\AssetBundle;

class PrismAsset extends AssetBundle
{

    public $sourcePath = '@vendor/yii2cmf/yii2-prism-asset';

    public $css = [
        'src/assets/prism.css',
    ];

    public $js = [
        'src/assets/prism.js',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_END];
}
