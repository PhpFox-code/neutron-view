<?php

namespace Phpfox\View;


interface RendererInterface
{
    /**
     * @param ViewModel $viewModel
     *
     * @return string
     */
    public function render($viewModel);
}