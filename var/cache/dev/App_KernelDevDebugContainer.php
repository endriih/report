<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSGD9nFZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSGD9nFZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSGD9nFZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSGD9nFZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSGD9nFZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'SGD9nFZ',
    'container.build_id' => '26c4b4f7',
    'container.build_time' => 1680471453,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSGD9nFZ');
