<?php

namespace ZnYii\Assets\Bootstrap4;

use ZnCore\Bundle\Base\BaseBundle;

class Bundle extends BaseBundle
{

    public function yiiWeb(): array
    {
        return [
            'components' => [
                'assetManager' => [
                    'bundles' => [
                        'yii\bootstrap\BootstrapAsset' => [
                            'class' => 'ZnYii\Assets\Bootstrap4\BootstrapAsset',
                        ],
                        'yii\web\JqueryAsset' => [
                            'class' => 'ZnYii\Assets\Jquery3\JqueryAsset',
                        ],
                    ],
                ],
            ],
        ];
    }

    public function yiiAdmin(): array
    {
        return $this->yiiWeb();
    }
}
