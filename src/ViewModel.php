<?php

namespace Phpfox\View;


class ViewModel
{
    /**
     * @var array
     */
    public $variables = [];

    /**
     * @var string
     */
    public $template = '';

    /**
     * ViewModel constructor.
     *
     * @param array $variables
     */
    public function __construct($variables = [])
    {
        $this->variables = $variables;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return array
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * @param array $variables
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;
    }

    /**
     * @param array $variables
     *
     * @return $this
     */
    public function assign($variables)
    {
        foreach ($variables as $name => $value) {
            $this->variables[$name] = $value;
        }
        return $this;
    }
}