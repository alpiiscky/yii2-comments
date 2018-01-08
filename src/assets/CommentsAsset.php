<?php

namespace alpiiscky\comments\assets;

/**
 * Class CommentsAsset
 * @package alpiiscky\comments\assets
 */
class CommentsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/alpiiscky/yii2-comments/src/assets/sources/';

    public $css = [
        'css/comments.scss',
    ];

    public $js = [
        'js/comments.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}