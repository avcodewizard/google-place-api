<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31011414a45ae0f704cacdfc3540158a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Avcodewizard\\GooglePlaceApi\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Avcodewizard\\GooglePlaceApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit31011414a45ae0f704cacdfc3540158a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31011414a45ae0f704cacdfc3540158a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31011414a45ae0f704cacdfc3540158a::$classMap;

        }, null, ClassLoader::class);
    }
}
