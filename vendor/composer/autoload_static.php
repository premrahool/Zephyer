<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91919290d5f5073f1950840d1ef73a17
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91919290d5f5073f1950840d1ef73a17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91919290d5f5073f1950840d1ef73a17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91919290d5f5073f1950840d1ef73a17::$classMap;

        }, null, ClassLoader::class);
    }
}
