<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLINrCkO\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLINrCkO/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerLINrCkO.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerLINrCkO\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerLINrCkO\srcApp_KernelProdContainer([
    'container.build_hash' => 'LINrCkO',
    'container.build_id' => '331c08ac',
    'container.build_time' => 1600955833,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLINrCkO');
