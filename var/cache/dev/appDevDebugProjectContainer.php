<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerShziz02\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerShziz02/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerShziz02.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerShziz02\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerShziz02\appDevDebugProjectContainer();