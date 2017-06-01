<?php
/**
 * @link https://github.com/timurmelnikov/yii2-vuejs
 * @copyright Copyright (c) 2017 Timur Melnikov
 * @license MIT
 */

namespace timurmelnikov\assets;

use yii\web\AssetBundle;

/**
 * Класс подключения скрипта Vue.js
 */
class VueResourceAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue-resource/dist';
    public $depends = [
        'timurmelnikov\assets\VueAsset'
        ];

    //С этим, нужно что-то делать...    
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

    /**
    * Метод инициализации
    */
    public function init()
    {
        parent::init();
        $this->js[] = YII_ENV_DEV ? 'vue-resource.js':'vue-resource.min.js';
    }
}
