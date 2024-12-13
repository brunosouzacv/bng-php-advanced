<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc05f4b8920482513ea9cbe4aafdca7f5
{
    public static $files = array (
        '755d4b7a5a2aa81e88aa84640c2b6840' => __DIR__ . '/../..' . '/app/config.php',
        'e5ed17891422fa03840f68a10dbc3e3b' => __DIR__ . '/../..' . '/app/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bng\\System\\' => 11,
            'bng\\Models\\' => 11,
            'bng\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bng\\System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/system',
        ),
        'bng\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
        'bng\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'bng\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'bng\\Controllers\\Main' => __DIR__ . '/../..' . '/app/controllers/Main.php',
        'bng\\Models\\Agents' => __DIR__ . '/../..' . '/app/Models/Agents.php',
        'bng\\Models\\BaseModel' => __DIR__ . '/../..' . '/app/Models/BaseModel.php',
        'bng\\System\\Database' => __DIR__ . '/../..' . '/app/system/Database.php',
        'bng\\System\\Router' => __DIR__ . '/../..' . '/app/system/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc05f4b8920482513ea9cbe4aafdca7f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc05f4b8920482513ea9cbe4aafdca7f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc05f4b8920482513ea9cbe4aafdca7f5::$classMap;

        }, null, ClassLoader::class);
    }
}
