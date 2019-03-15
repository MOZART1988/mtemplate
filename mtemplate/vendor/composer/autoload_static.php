<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e1dc0ff525d8564a21df6958725ec82
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mtemplate\\mclasses\\' => 19,
            'mtemplate\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mtemplate\\mclasses\\' => 
        array (
            0 => __DIR__ . '/../..' . '/mclasses',
        ),
        'mtemplate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e1dc0ff525d8564a21df6958725ec82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e1dc0ff525d8564a21df6958725ec82::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}