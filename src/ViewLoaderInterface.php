<?php

namespace Neutron\View;


interface ViewLoaderInterface
{
    /**
     * @param string $name
     *
     * @return string|null
     */
    public function load($name);

}