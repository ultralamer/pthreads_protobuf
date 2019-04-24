<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f28ad97c51d034a92c82d94aa863181
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TestProto\\' => 10,
        ),
        'G' => 
        array (
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
            'GPBMetadata\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TestProto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/TestProto',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
        'GPBMetadata\\' => 
        array (
            0 => __DIR__ . '/../..' . '/GPBMetadata',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f28ad97c51d034a92c82d94aa863181::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f28ad97c51d034a92c82d94aa863181::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}