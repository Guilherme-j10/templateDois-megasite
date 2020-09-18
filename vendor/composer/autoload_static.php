<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd1ee7e04be3abf5385150a76ffb10d0
{
    public static $files = array (
        '79f66bc0a1900f77abe4a9a299057a0a' => __DIR__ . '/..' . '/starkbank/ecdsa/src/ellipticcurve.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'elevenstack\\expressphp\\' => 23,
            'elevenstack\\Gencriptor\\' => 23,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'SendGrid\\Stats\\' => 15,
            'SendGrid\\Mail\\' => 14,
            'SendGrid\\Helper\\' => 16,
            'SendGrid\\EventWebhook\\' => 22,
            'SendGrid\\Contacts\\' => 18,
            'SendGrid\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'elevenstack\\expressphp\\' => 
        array (
            0 => __DIR__ . '/..' . '/elevenstack/expressphp/src',
        ),
        'elevenstack\\Gencriptor\\' => 
        array (
            0 => __DIR__ . '/..' . '/elevenstack/gencriptor/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'SendGrid\\Stats\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/stats',
        ),
        'SendGrid\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/mail',
        ),
        'SendGrid\\Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/helper',
        ),
        'SendGrid\\EventWebhook\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/eventwebhook',
        ),
        'SendGrid\\Contacts\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/contacts',
        ),
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/php-http-client/lib',
        ),
    );

    public static $classMap = array (
        'BaseSendGridClientInterface' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/BaseSendGridClientInterface.php',
        'SendGrid' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/SendGrid.php',
        'TwilioEmail' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/TwilioEmail.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd1ee7e04be3abf5385150a76ffb10d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd1ee7e04be3abf5385150a76ffb10d0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd1ee7e04be3abf5385150a76ffb10d0::$classMap;

        }, null, ClassLoader::class);
    }
}
