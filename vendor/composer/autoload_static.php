<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8eb4aea3af4f688466d2af0924205420
{
    public static $files = array (
        '4ff30a4314b82af6aaff649e93a4407f' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'text\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8eb4aea3af4f688466d2af0924205420::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8eb4aea3af4f688466d2af0924205420::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
