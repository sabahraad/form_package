<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f8ef215e49aabc5e952a4d9f52856e9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aamarpay\\Pgtest\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aamarpay\\Pgtest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f8ef215e49aabc5e952a4d9f52856e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f8ef215e49aabc5e952a4d9f52856e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f8ef215e49aabc5e952a4d9f52856e9::$classMap;

        }, null, ClassLoader::class);
    }
}
