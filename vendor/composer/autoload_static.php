<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcda4f804980c8aeb3616ea55fd04cd3c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcda4f804980c8aeb3616ea55fd04cd3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcda4f804980c8aeb3616ea55fd04cd3c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
