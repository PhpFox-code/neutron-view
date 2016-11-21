<?php

namespace Phpfox\View;


/**
 * Class PhpRenderer
 *
 * @package Phpfox\View
 */
class PhpRenderer implements RendererInterface, ResolverInterface
{
    /**
     * @var array
     */
    protected $map = [];

    public function __construct()
    {
        $this->reset();
    }

    public function partial($templateName, $__vars_ = [])
    {
        $__template_ = $this->resolve($templateName);

        if (!$__template_) {
            return '';
        }

        ob_start();

        extract($__vars_);

        unset($__vars_);

        include $__template_;

        return ob_get_clean();
    }

    /**
     * @inheritdoc
     */
    public function render($viewModel)
    {
        $__template_ = $this->resolve($viewModel->getTemplate());

        if (!$__template_) {
            return '';
        }

        ob_start();

        $__vars_ = $viewModel->getVariables();

        extract($__vars_);

        unset($__vars_);

        include $__template_;

        return ob_get_clean();
    }

    public function reset()
    {
        $this->map = config('views');
        return $this;
    }

    /**
     * @param string $name
     *
     * @return string
     */
    public function resolve($name)
    {
        if (!isset($this->map[$name])) {
            throw new \InvalidArgumentException("Can not resolve path of '{$name}'");
        }

        return PHPFOX_DIR . DS . $this->map[$name];
    }
}