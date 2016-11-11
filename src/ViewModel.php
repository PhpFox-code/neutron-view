<?php

namespace Phpfox\View;

final class ViewModel
{
    /**
     * @var string
     */
    public $template = '';

    /**
     * @var array
     */
    public $variables = [];

    /**
     * ViewModel constructor.
     *
     * @param string $template
     * @param array  $variables
     */
    public function __construct($template = null, $variables = [])
    {
        $this->template = $template;
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