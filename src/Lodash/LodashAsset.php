<?php

namespace ZnYii\Assets\Lodash;

use ZnYii\Base\Web\Assets\BaseAsset;

class LodashAsset extends BaseAsset
{

    public $sourcePath = __DIR__ . '/dist';
    public $js = [
        'lodash.min.js',
    ];
}
