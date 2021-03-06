<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit288d703539a40eb8f6154aebfbf83bca
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '65262669306b9cfaa9401133253e43a1' => __DIR__ . '/..' . '/torophp/torophp/src/Toro.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'L' => 
        array (
            'Linkit\\Models\\' => 14,
            'Linkit\\Controllers\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Linkit\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'Linkit\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit288d703539a40eb8f6154aebfbf83bca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit288d703539a40eb8f6154aebfbf83bca::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit288d703539a40eb8f6154aebfbf83bca::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
