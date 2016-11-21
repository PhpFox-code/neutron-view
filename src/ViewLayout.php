<?php

namespace Phpfox\View;

/**
 * Class ViewLayout
 *
 * @package Phpfox\View
 */
class ViewLayout extends ViewModel
{
    public function __construct()
    {
        parent::__construct('layout/default', []);
    }

    /**
     * @return $this
     */
    public function prepare()
    {
        events()->trigger('onViewLayoutPrepare', $this);

        return $this;
    }
}