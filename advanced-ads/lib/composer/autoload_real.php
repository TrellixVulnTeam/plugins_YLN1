<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit_advanced_ads
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('AdvancedAds\Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \AdvancedAds\Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit_advanced_ads', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \AdvancedAds\Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit_advanced_ads', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\AdvancedAds\Composer\Autoload\ComposerStaticInit_advanced_ads::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        return $loader;
    }
}