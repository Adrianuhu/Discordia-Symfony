<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTKPNGlC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTKPNGlC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTKPNGlC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTKPNGlC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTKPNGlC\App_KernelDevDebugContainer([
    'container.build_hash' => 'TKPNGlC',
    'container.build_id' => 'ddfd93d3',
    'container.build_time' => 1612037292,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTKPNGlC');
