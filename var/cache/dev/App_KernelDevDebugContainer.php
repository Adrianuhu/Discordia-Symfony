<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKVVrnZe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKVVrnZe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKVVrnZe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKVVrnZe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKVVrnZe\App_KernelDevDebugContainer([
    'container.build_hash' => 'KVVrnZe',
    'container.build_id' => '80e916ef',
    'container.build_time' => 1611795048,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKVVrnZe');
