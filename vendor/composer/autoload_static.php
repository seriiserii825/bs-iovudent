<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd68a57ba8909a4e0a5416ef8c810fa30
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd68a57ba8909a4e0a5416ef8c810fa30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd68a57ba8909a4e0a5416ef8c810fa30::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
