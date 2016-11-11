<?php

namespace Phpfox\ViewManager;

/**
 * Class TemplateMapResolver
 *
 * @package Phpfox\ViewManager
 */
class TemplateMapResolver implements ResolverInterface
{
    /**
     * @var array
     */
    protected $map = [];

    /**
     * @param string $name
     *
     * @return string
     */
    public function resolve($name)
    {
        return isset($this->map[$name]) ? $this->map[$name] : null;
    }
}