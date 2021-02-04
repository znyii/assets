<?php

namespace ZnYii\Assets\Jquery3;

use ZnYii\Web\Assets\BaseAsset;

class JqueryAsset extends BaseAsset
{

    public $sourcePath = __DIR__ . '/dist';
    public $js = [
        'jquery.min.js',
    ];
}
