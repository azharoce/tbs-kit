<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b7dc32bb41f8164ef49d5f5383ad856
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twinbrotherstudio\\Twinbrotherstudio-kit\\' => 40,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twinbrotherstudio\\Twinbrotherstudio-kit\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b7dc32bb41f8164ef49d5f5383ad856::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b7dc32bb41f8164ef49d5f5383ad856::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b7dc32bb41f8164ef49d5f5383ad856::$classMap;

        }, null, ClassLoader::class);
    }
}
