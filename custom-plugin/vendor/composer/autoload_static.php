<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ae9bc3bc92a3ee093b4e1ed9a9c6c40
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ae9bc3bc92a3ee093b4e1ed9a9c6c40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ae9bc3bc92a3ee093b4e1ed9a9c6c40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ae9bc3bc92a3ee093b4e1ed9a9c6c40::$classMap;

        }, null, ClassLoader::class);
    }
}