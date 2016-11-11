<?php

namespace Phpfox\ViewManager;


interface RendererInterface
{
    /**
     * @param ViewModel $viewModel
     *
     * @return string
     */
    public function render($viewModel);
}