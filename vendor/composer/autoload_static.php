<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita31a82b096715f267497e5b3a1c01872
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita31a82b096715f267497e5b3a1c01872::$classMap;

        }, null, ClassLoader::class);
    }
}
