<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBtikz0K\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBtikz0K/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBtikz0K.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBtikz0K\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBtikz0K\App_KernelDevDebugContainer([
    'container.build_hash' => 'Btikz0K',
    'container.build_id' => '7454a2af',
    'container.build_time' => 1693869289,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBtikz0K');
