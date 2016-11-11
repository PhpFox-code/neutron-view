<?php
namespace Phpfox\ViewManager;

return [
    'aliases'   => [
        'renderer' => PhpRenderer::class,
        'widget'   => WidgetManager::class,
    ],
    'factories' => [
        PhpRenderer::class   => null,
        WidgetManager::class => null,
    ],
];