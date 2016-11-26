<?php

namespace Phpfox\View;


class TwigTemplate implements ViewRenderInterface
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * @var string
     */
    protected $map;

    public function __construct()
    {
        $this->twig = new \Twig_Environment(service('view.loader'), []);
    }

    /**
     * @param string $name
     * @param array  $data
     *
     * @return string
     */
    public function render($name, $data)
    {
        return $this->twig->render($name, $data);
    }
}