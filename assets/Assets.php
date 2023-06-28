<?php

namespace humhub\modules\Starred\assets;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@example-basic/resources';

    /**
     * @inheritdoc
     */
    public $publishOptions = [
        'forceCopy' => false,
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/star-rating.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/star-rating.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // Register a custom JavaScript file to handle the star rating functionality
        $this->js[] = 'js/star-rating-init.js';
    }
}
