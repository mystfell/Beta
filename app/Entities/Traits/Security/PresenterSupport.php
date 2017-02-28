<?php

namespace Myst\Entities\Traits\Security;

trait PresenterSupport {
    
    /**
     * Holds an instance of the presenter for future use.
     * 
     * @var BasePresenter
     */
    private $_presenter = null;

    /**
     * Retrieves an instance of the presenter.
     * 
     * @return BasePresenter
     */
    public function presenter() {
        // Was an instance of the presenter already made?
        if (is_null($this->_presenter)) {
            // It wasn't, so grab the class name
            $object = $this->getPresenterClass();

            // Make an instance of the presenter
            $this->_presenter = new $object($this);
        }

        // Return the instance
        return $this->_presenter;
    }

    /**
     * Retrieves the presenter for the model.
     *
     * @return     McCool\LaravelAutoPresenter\BasePresenter The presenter
     */
    public function getPresenterAttribute() {
        return $this->presenter();
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass() {
        $class = str_replace('Models', 'Presenters', static::class);

        return class_exists($class) ? $class : 'McCool\LaravelAutoPresenter\BasePresenter';
    }
}