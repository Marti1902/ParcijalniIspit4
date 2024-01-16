<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0d61423d0f5255bbec44e4d382aa90b
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0d61423d0f5255bbec44e4d382aa90b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0d61423d0f5255bbec44e4d382aa90b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0d61423d0f5255bbec44e4d382aa90b::$classMap;

        }, null, ClassLoader::class);
    }
}
