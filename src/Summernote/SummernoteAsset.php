<?php

namespace ZnYii\Assets\Summernote;

use yii\web\JqueryAsset;
use ZnYii\Web\Assets\BaseAsset;

class SummernoteAsset extends BaseAsset
{

    public $sourcePath = __DIR__ . '/dist';
    public $css = [
        'summernote-bs4.min.css'
    ];
    public $js = [
        'summernote-bs4.min.js',
        'register-editor.js',
    ];
    public $depends = [
        JqueryAsset::class,
    ];
}
