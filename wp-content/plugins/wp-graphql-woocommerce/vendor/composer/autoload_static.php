<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe319feb8c0b2d7478695d8dce39b020
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\WooCommerce\\Vendor\\Firebase\\JWT\\BeforeValidException' => __DIR__ . '/../..' . '/vendor-prefixed/firebase/php-jwt/src/BeforeValidException.php',
        'WPGraphQL\\WooCommerce\\Vendor\\Firebase\\JWT\\CachedKeySet' => __DIR__ . '/../..' . '/vendor-prefixed/firebase/php-jwt/src/CachedKeySet.php',
        'WPGraphQL\\WooCommerce\\Vendor\\Firebase\\JWT\\ExpiredException' => __DIR__ . '/../..' . '/vendor-prefixed/firebase/php-jwt/src/ExpiredException.php',
        'WPGraphQL\\WooCommerce\\Vendor\\Firebase\\JWT\\JWK' => __DIR__ . '/../..' . '/vendor-prefixed/firebase/php-jwt/src/JWK.php',
        'WPGraphQL\\WooCommerce\\Vendor\\Firebase\\JWT\\JWT' => __DIR__ . '/../..' . '/vendor-prefixed/firebase/php-jwt/src/JWT.php',
        'WPGraphQL\\WooCommerce\\Vendor\\Firebase\\JWT\\JWTExceptionWithPayloadInterface' => __DIR__ . '/../..' . '/vendor-prefixed/firebase/php-jwt/src/JWTExceptionWithPayloadInterface.php',
        'WPGraphQL\\WooCommerce\\Vendor\\Firebase\\JWT\\Key' => __DIR__ . '/../..' . '/vendor-prefixed/firebase/php-jwt/src/Key.php',
        'WPGraphQL\\WooCommerce\\Vendor\\Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/../..' . '/vendor-prefixed/firebase/php-jwt/src/SignatureInvalidException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe319feb8c0b2d7478695d8dce39b020::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe319feb8c0b2d7478695d8dce39b020::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe319feb8c0b2d7478695d8dce39b020::$classMap;

        }, null, ClassLoader::class);
    }
}
