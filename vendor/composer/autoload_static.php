<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee3fac21be1f169e87419de14b30eadb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Module\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Module\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Module',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee3fac21be1f169e87419de14b30eadb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee3fac21be1f169e87419de14b30eadb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee3fac21be1f169e87419de14b30eadb::$classMap;

        }, null, ClassLoader::class);
    }
}