<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit148e0ecb14b1c2cf28810a8d321b3a07
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Josantonius\\Asset\\' => 18,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'App\\Modules\\ForkMeGitHub\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Josantonius\\Asset\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/asset/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'App\\Modules\\ForkMeGitHub\\' => 
        array (
            0 => '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit148e0ecb14b1c2cf28810a8d321b3a07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit148e0ecb14b1c2cf28810a8d321b3a07::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}