<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7504bdcf8f65179f28f97319d5d0e54e
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Otus\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Otus\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Otus',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7504bdcf8f65179f28f97319d5d0e54e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7504bdcf8f65179f28f97319d5d0e54e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}