<?php

namespace yii\materialicons;

/**
 * Class AssetBundle
 * @package yii\materialicons
 */
class AssetBundle extends \yii\web\AssetBundle
{
//    /**
//     * @inheritdoc
//     */
//    public $sourcePath = '@vendor/mervick/material-design-icons';

    /**
     * @inheritdoc
     */
    public $css = [
        'https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css',
    ];

//    /**
//     * Initializes the bundle.
//     * Set publish options to copy only necessary files (in this case css and font folders)
//     */
//    public function init()
//    {
//        parent::init();
//
//        $this->publishOptions['beforeCopy'] = function ($from, $to) {
//            return preg_match('%(/|\\\\)(fonts|css)%', $from);
//        };
//    }
}