<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63c1ff07a487d8cede18b7b813f3bd7f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63c1ff07a487d8cede18b7b813f3bd7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63c1ff07a487d8cede18b7b813f3bd7f::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit63c1ff07a487d8cede18b7b813f3bd7f::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit63c1ff07a487d8cede18b7b813f3bd7f::$classMap;

        }, null, ClassLoader::class);
    }
}