<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite97c48738586fa8710e049c68e9cf8f5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite97c48738586fa8710e049c68e9cf8f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite97c48738586fa8710e049c68e9cf8f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite97c48738586fa8710e049c68e9cf8f5::$classMap;

        }, null, ClassLoader::class);
    }
}