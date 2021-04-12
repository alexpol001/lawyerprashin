<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/icomoon.css',
        'css/prettyPhoto.css',
        'css/animate.css',
        'css/styles.css',
        'plugins/revealator/fm.revealator.jquery.min.css',
    ];

    public $js = [
        'js/jquery.easing.1.3.js',
        'js/counter.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.superslides.js',
        'js/jquery.isotope.min.js',
        'js/anim.js',
        'js/validation.js',
        'plugins/revealator/fm.revealator.jquery.js',
        'js/theme-scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
    ];
}
