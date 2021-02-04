<?php

namespace ZnYii\Assets\AdminLte3;

use ZnCore\Base\Libs\App\Base\BaseBundle;

class Bundle extends BaseBundle
{

    public function yiiWeb(): array
    {
        return [
            'components' => [
                'assetManager' => [
                    'bundles' => [
                        'yii\bootstrap\BootstrapAsset' => [
                            //'class' => 'ZnYii\Assets\Bootstrap4\BootstrapAsset',
                            'class' => 'ZnYii\Assets\AdminLte3\AdminLteAsset',
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
