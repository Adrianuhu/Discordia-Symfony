<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDrAJY5M\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDrAJY5M/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDrAJY5M.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDrAJY5M\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDrAJY5M\App_KernelDevDebugContainer([
    'container.build_hash' => 'DrAJY5M',
    'container.build_id' => '951e6e16',
    'container.build_time' => 1613172027,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDrAJY5M');
