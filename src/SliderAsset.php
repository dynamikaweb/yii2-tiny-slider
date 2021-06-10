<?php

namespace dynamikaweb\tiny;

class SliderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/tiny-slider';

    public $css = [
        'dist/tiny-slider.css'
    ];

    public $js = [
        'dist/min/tiny-slider.js',
    ];
}
