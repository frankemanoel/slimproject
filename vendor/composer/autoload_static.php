<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit572dfb2d0ec1abfa592e5a1f2f8b69cc
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit572dfb2d0ec1abfa592e5a1f2f8b69cc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
