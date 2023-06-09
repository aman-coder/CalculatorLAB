<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce475b9f7f75fe482285fc866e7612df
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Request' => __DIR__ . '/../..' . '/core/request.php',
        'Router' => __DIR__ . '/../..' . '/core/router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitce475b9f7f75fe482285fc866e7612df::$classMap;

        }, null, ClassLoader::class);
    }
}
