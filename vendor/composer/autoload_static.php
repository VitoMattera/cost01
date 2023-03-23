<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba31b9a5f167b7e289ed191e39732fc6
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vitomattera\\Cost01\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vitomattera\\Cost01\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitba31b9a5f167b7e289ed191e39732fc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba31b9a5f167b7e289ed191e39732fc6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba31b9a5f167b7e289ed191e39732fc6::$classMap;

        }, null, ClassLoader::class);
    }
}
