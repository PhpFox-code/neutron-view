<?php

namespace Phpfox\View;


interface ResolverInterface
{
    /**
     * @param $name
     *
     * @return mixed
     */
    public function resolve($name);
}