<?php

namespace Neutron\View;

/**
 * Class ViewLayout
 *
 * @package Neutron\View
 */
class ViewLayout extends ViewModel
{
    /**
     * @var string
     */
    protected $pageName = '';

    public function __construct()
    {
        parent::__construct('layout/master/default', []);
    }

    /**
     * @return $this
     */
    public function prepare()
    {
        events()->trigger('onViewLayoutPrepare', $this);

        return $this;
    }

    /**
     * @return string
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * @param string $pageName
     *
     * @return $this
     */
    public function setPageName($pageName)
    {
        $this->pageName = $pageName;
        return $this;
    }
}