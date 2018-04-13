<?php

namespace werwolflg\wschat;

use yii\web\AssetBundle;

/**
 * Class ChatLibAsset
 * @package werwolflg\wschat
 */
class ChatLibAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        'fontawesome/css/font-awesome.min.css',
        'pnotify/pnotify.core.css',
    ];
    public $js = [
        'underscore/underscore-min.js',
        'backbone/backbone.js',
        'js-cookie/src/js.cookie.js',
        'pnotify/pnotify.core.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
