<?php

namespace webcreator\revslider;

use yii\web\AssetBundle;
use yii\web\View;

class SliderAsset extends AssetBundle
{
    public $sourcePath = '@webcreator/revslider/assets';
    public $js = [
        'plugins/jquery-ui/jquery-ui.js',
        'plugins/rs-plugin/js/jquery.themepunch.tools.min.js',
        'plugins/rs-plugin/js/jquery.themepunch.revolution.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}