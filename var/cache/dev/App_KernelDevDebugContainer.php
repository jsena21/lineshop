<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMaox9ii\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMaox9ii/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMaox9ii.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMaox9ii\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMaox9ii\App_KernelDevDebugContainer([
    'container.build_hash' => 'Maox9ii',
    'container.build_id' => '01a915e9',
    'container.build_time' => 1716816851,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMaox9ii');
