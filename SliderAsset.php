<?php

namespace webcreator\revslider;

use yii\web\AssetBundle;

class SliderAsset extends AssetBundle
{
    public $sourcePath = '@webcreator/revslider/assets';
    public $js = [
        'plugins/rs-plugin/js/jquery.themepunch.tools.min.js',
        'plugins/rs-plugin/js/jquery.themepunch.revolution.min.js',
        //'custom.js'
    ];
    public $css = [
        'plugins/rs-plugin/css/settings.css',
        'custom.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}