<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5Jz8cxk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5Jz8cxk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5Jz8cxk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5Jz8cxk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5Jz8cxk\App_KernelDevDebugContainer([
    'container.build_hash' => '5Jz8cxk',
    'container.build_id' => 'fdc6cab6',
    'container.build_time' => 1717054749,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container5Jz8cxk');
