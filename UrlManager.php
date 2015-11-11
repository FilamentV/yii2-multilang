<?php

namespace filamentv\multilang;

/**
 * Class UrlManager
 * UrlManager used for change basic yii\web\UrlManager
 * 
 * @package filamentv\multilang
 * @author FilamentV <vortex.filament@gmail.com>
 * @copyright (c) 2014, Thread
 */
class UrlManager extends \yii\web\UrlManager {

    /**
     * 
     * @param type $params
     * @return type
     */
    public function createUrl($params) {
        return MultiLanguage::addLangToUrl(parent::createUrl($params));
    }

    /**
     * 
     * @return type
     */
    public function getBaseUrl() {
        $this->setBaseUrl(MultiLanguage::getBaseUrl());
        return parent::getBaseUrl();
    }

}
