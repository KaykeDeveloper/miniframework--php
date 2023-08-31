<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb29be214c03972ce8e426af06dbe2c8c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb29be214c03972ce8e426af06dbe2c8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb29be214c03972ce8e426af06dbe2c8c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}