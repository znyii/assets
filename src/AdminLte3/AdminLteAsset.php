<?php

namespace ZnYii\Assets\AdminLte3;

use yii\web\JqueryAsset;
use ZnYii\Base\Web\Assets\BaseAsset;

class AdminLteAsset extends BaseAsset
{

    public $sourcePath = __DIR__ . '/dist';
    public $css = [
        'css/adminlte.min.css',
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/adminlte.min.js',
    ];
    public $depends = [
        JqueryAsset::class,
    ];
}
