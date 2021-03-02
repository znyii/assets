<?php

namespace ZnYii\Assets\Backbone;

use ZnYii\Assets\Lodash\LodashAsset;
use ZnYii\Web\Assets\BaseAsset;

class BackboneAsset extends BaseAsset
{

    public $sourcePath = __DIR__ . '/dist';
    public $js = [
        'backbone.js',
    ];
    public $depends = [
        LodashAsset::class,
    ];
}
