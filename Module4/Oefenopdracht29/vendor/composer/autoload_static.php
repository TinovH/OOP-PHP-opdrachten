<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit404d14b63ed19274960a9cd2e7667e26
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BankApp29\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BankApp29\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit404d14b63ed19274960a9cd2e7667e26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit404d14b63ed19274960a9cd2e7667e26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit404d14b63ed19274960a9cd2e7667e26::$classMap;

        }, null, ClassLoader::class);
    }
}
