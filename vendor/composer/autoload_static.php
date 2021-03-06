<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedcd3de93c3cb9e8c160d327a277d0ca
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Model\\' => 10,
            'App\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Model',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedcd3de93c3cb9e8c160d327a277d0ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedcd3de93c3cb9e8c160d327a277d0ca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
