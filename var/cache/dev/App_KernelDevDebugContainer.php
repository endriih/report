<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWdxsl1q\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWdxsl1q/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWdxsl1q.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWdxsl1q\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWdxsl1q\App_KernelDevDebugContainer([
    'container.build_hash' => 'Wdxsl1q',
    'container.build_id' => 'b2711147',
    'container.build_time' => 1682069877,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWdxsl1q');
