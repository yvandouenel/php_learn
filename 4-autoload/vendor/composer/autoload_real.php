<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb74d0b5d14882fd16a731a81ff3358ec
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb74d0b5d14882fd16a731a81ff3358ec', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb74d0b5d14882fd16a731a81ff3358ec', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb74d0b5d14882fd16a731a81ff3358ec::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
