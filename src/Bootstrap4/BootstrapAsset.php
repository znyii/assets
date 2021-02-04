<?php

namespace ZnYii\Assets\Bootstrap4;

use yii\web\JqueryAsset;
use ZnYii\Web\Assets\BaseAsset;

class BootstrapAsset extends BaseAsset
{

    public $sourcePath = __DIR__ . '/dist';
    public $css = [
        'bootstrap.min.css',
    ];
    public $js = [
        'bootstrap.bundle.min.js',
    ];
    public $depends = [
        JqueryAsset::class,
    ];
}
