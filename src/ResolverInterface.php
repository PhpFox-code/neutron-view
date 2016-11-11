<?php

namespace Phpfox\ViewManager;


interface ResolverInterface
{
    /**
     * @param $name
     *
     * @return mixed
     */
    public function resolve($name);
}