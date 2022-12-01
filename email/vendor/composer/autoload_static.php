<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2899d3f396f7c95666aa4c4ba2e71396
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2899d3f396f7c95666aa4c4ba2e71396::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2899d3f396f7c95666aa4c4ba2e71396::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2899d3f396f7c95666aa4c4ba2e71396::$classMap;

        }, null, ClassLoader::class);
    }
}
