<?php

namespace filamentv\multilang;

/**
 * UrlManager used for change basic yii\web\UrlManager
 * 
 * @package filamentv\multilang
 * @author FilamentV <vortex.filament@gmail.com>
 * @copyright (c) 2014, Thread
 * @version 20/03/2015
 */
class UrlManager extends \yii\web\UrlManager {

    public function createUrl($params) {
        return MultiLanguage::addLangToUrl(parent::createUrl($params));
    }

    public function getBaseUrl() {
        $this->setBaseUrl(MultiLanguage::getBaseUrl());
        return parent::getBaseUrl();
    }

}
