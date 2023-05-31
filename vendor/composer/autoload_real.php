<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2ce60c2baf981a1a816cf11783f8b03a
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

        spl_autoload_register(array('ComposerAutoloaderInit2ce60c2baf981a1a816cf11783f8b03a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2ce60c2baf981a1a816cf11783f8b03a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2ce60c2baf981a1a816cf11783f8b03a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
