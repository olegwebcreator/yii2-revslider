<?php

namespace webcreator\revslider;

use yii\web\AssetBundle;
use yii\web\View;

class SliderAsset extends AssetBundle
{
    public $sourcePath = '@webcreator/yii2-revslider/assets';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}