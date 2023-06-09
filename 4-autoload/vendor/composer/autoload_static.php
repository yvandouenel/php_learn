<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb74d0b5d14882fd16a731a81ff3358ec
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Diginamic\\Test\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Diginamic\\Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb74d0b5d14882fd16a731a81ff3358ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb74d0b5d14882fd16a731a81ff3358ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb74d0b5d14882fd16a731a81ff3358ec::$classMap;

        }, null, ClassLoader::class);
    }
}
