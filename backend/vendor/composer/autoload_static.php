<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26df677c3ea048cfa3db519449d6e999
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\composer\\' => 13,
            'yii\\bootstrap\\' => 14,
            'yii\\' => 4,
        ),
        'o' => 
        array (
            'onmotion\\helpers\\' => 17,
            'onmotion\\gallery\\' => 17,
        ),
        'k' => 
        array (
            'kartik\\plugins\\fileinput\\' => 25,
            'kartik\\file\\' => 12,
            'kartik\\base\\' => 12,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'onmotion\\helpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/onmotion/yii2-helpers',
        ),
        'onmotion\\gallery\\' => 
        array (
            0 => __DIR__ . '/..' . '/onmotion/yii2-gallery',
        ),
        'kartik\\plugins\\fileinput\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/bootstrap-fileinput',
        ),
        'kartik\\file\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-fileinput',
        ),
        'kartik\\base\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-krajee-base',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26df677c3ea048cfa3db519449d6e999::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26df677c3ea048cfa3db519449d6e999::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit26df677c3ea048cfa3db519449d6e999::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
