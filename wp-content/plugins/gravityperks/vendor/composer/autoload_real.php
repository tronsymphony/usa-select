<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcfbf225b9cbdb1f6be58d4b4bd99fbc6
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

        spl_autoload_register(array('ComposerAutoloaderInitcfbf225b9cbdb1f6be58d4b4bd99fbc6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcfbf225b9cbdb1f6be58d4b4bd99fbc6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcfbf225b9cbdb1f6be58d4b4bd99fbc6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
