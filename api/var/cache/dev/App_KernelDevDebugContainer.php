<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGQOZ4lG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGQOZ4lG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGQOZ4lG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGQOZ4lG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGQOZ4lG\App_KernelDevDebugContainer([
    'container.build_hash' => 'GQOZ4lG',
    'container.build_id' => '94e59598',
    'container.build_time' => 1646927588,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGQOZ4lG');
