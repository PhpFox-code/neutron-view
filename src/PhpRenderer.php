<?php

namespace Phpfox\View;

/**
 * Class PhpRenderer
 *
 * @package Phpfox\View
 */
class PhpRenderer implements RendererInterface
{
    /**
     * @var array
     */
    protected $templateFiles = [];

    /**
     * @var ResolverInterface
     */
    protected $resolver;

    /**
     * @return ResolverInterface
     */
    public function getResolver()
    {
        return $this->resolver;
    }

    /**
     * @param ResolverInterface $resolver
     */
    public function setResolver($resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     * @inheritdoc
     */
    public function render($viewModel)
    {
        $__template_ = $this->getResolver()->resolve($viewModel->getTemplate());
        
        ob_start();

        $__vars_ = $viewModel->getVariables();

        extract($__vars_);

        unset($__vars_);

        include $__template_;

        return ob_get_clean();
    }
}