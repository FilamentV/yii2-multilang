<?php

namespace filamentv\multilang;

/**
 * Class Request
 * Common Імплементація мов в Request [[Request]]
 * @package filamentv\multilang
 * @author FilamentV <vortex.filament@gmail.com>
 * @copyright (c) 2014, Thread
 * @version 20/03/2015
 */
final class Request extends \yii\web\Request {

    private $_requestUri;

    /**
     * 
     * @return string
     */
    protected function resolveRequestUri() {
        if ($this->_requestUri === null)
            $this->_requestUri = MultiLanguage::processLangInUrl(parent::resolveRequestUri());

        return $this->_requestUri;
    }

    /**
     * 
     * @return string
     */
    public function getOriginalUrl() {
        return $this->getOriginalRequestUri();
    }

    /**
     * 
     * @return string
     */
    public function getOriginalRequestUri() {
        return MultiLanguage::addLangToUrl($this->resolveRequestUri());
    }

}
