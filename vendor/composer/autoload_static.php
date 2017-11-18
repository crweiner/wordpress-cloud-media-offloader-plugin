<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ec2436e403d1a777ab7e806a958bca9
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WordPress_ToolKit\\' => 18,
        ),
        'T' => 
        array (
            'TwoLabNet\\BackblazeB2\\' => 22,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'ChrisWhite\\B2\\' => 14,
            'Carbon_Fields\\Datastore\\Datastore\\' => 34,
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WordPress_ToolKit\\' => 
        array (
            0 => __DIR__ . '/..' . '/dmhendricks/wordpress-toolkit/core',
        ),
        'TwoLabNet\\BackblazeB2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'ChrisWhite\\B2\\' => 
        array (
            0 => __DIR__ . '/..' . '/dmhendricks/b2-sdk-php/src',
        ),
        'Carbon_Fields\\Datastore\\Datastore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Datastores',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ec2436e403d1a777ab7e806a958bca9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ec2436e403d1a777ab7e806a958bca9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
