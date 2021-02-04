<?php

namespace ZnYii\Assets\FontAwesome;

use ZnYii\Web\Assets\BaseAsset;

class FontAwesomeAsset extends BaseAsset
{

    // CDN: https://use.fontawesome.com/releases/v5.13.0/css/all.css
    public $sourcePath = __DIR__ . '/dist';
    public $css = [
        'css/all.min.css'
    ];
}
