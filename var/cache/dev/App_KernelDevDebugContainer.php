<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0RXlNK5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0RXlNK5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0RXlNK5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0RXlNK5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0RXlNK5\App_KernelDevDebugContainer([
    'container.build_hash' => '0RXlNK5',
    'container.build_id' => '8e11941d',
    'container.build_time' => 1654797921,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0RXlNK5');
