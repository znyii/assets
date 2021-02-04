<?php

namespace ZnYii\Assets\SourceSansPro;

use ZnYii\Web\Assets\BaseAsset;

class SourceSansProAsset extends BaseAsset
{

//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    /*public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
    ];*/

    public $sourcePath = __DIR__ . '/dist';
    public $css = [
        'stylesheet.css'
    ];
}
