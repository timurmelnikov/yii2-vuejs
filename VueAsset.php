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
class VueAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue/dist';
    
    /**
    * Метод инициализации
    */
    public function init()
    {
        parent::init();
        $this->js[] = YII_ENV_DEV ? 'vue.js':'vue.min.js';
    }
}
