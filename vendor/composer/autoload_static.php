<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f4bace34007406953db9e96e3c9b107
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f4bace34007406953db9e96e3c9b107::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f4bace34007406953db9e96e3c9b107::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f4bace34007406953db9e96e3c9b107::$classMap;

        }, null, ClassLoader::class);
    }
}
