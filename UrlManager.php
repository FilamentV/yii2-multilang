<?php

namespace thread\components;

use thread\components\MultiLanguage;

/**
 * Class UrlManager
 * Common Імплементація мов в UrlManager [[UrlManager]]
 * @package thread\components
 * @author FilamentV <vortex.filament@gmail.com>
 * @copyright (c) 2014, Thread
 * @version 20/03/2015
 */
final class UrlManager extends \yii\web\UrlManager {

    public function createUrl($params) {
        return MultiLanguage::addLangToUrl(parent::createUrl($params));
    }

    public function getBaseUrl() {
        $this->setBaseUrl(MultiLanguage::getBaseUrl());
        return parent::getBaseUrl();
    }

}
