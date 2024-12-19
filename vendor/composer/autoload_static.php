<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

<<<<<<< HEAD
class ComposerStaticInitc05f4b8920482513ea9cbe4aafdca7f5
{
    public static $files = array (
        '755d4b7a5a2aa81e88aa84640c2b6840' => __DIR__ . '/../..' . '/app/config.php',
        'e5ed17891422fa03840f68a10dbc3e3b' => __DIR__ . '/../..' . '/app/helpers/functions.php',
=======
class ComposerStaticInit080e2ccbecac0b0a0d365cb20495c659
{
    public static $files = array (
        '9792b02da3111b62997015981f2467d4' => __DIR__ . '/../..' . '/app/config.php',
        'de98e88a9b7b9c3addc53d9f0301b332' => __DIR__ . '/../..' . '/app/helpers/functions.php',
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bng\\System\\' => 11,
            'bng\\Models\\' => 11,
            'bng\\Controllers\\' => 16,
        ),
<<<<<<< HEAD
=======
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
    );

    public static $prefixDirsPsr4 = array (
        'bng\\System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/system',
        ),
        'bng\\Models\\' => 
        array (
<<<<<<< HEAD
            0 => __DIR__ . '/../..' . '/app/Models',
=======
            0 => __DIR__ . '/../..' . '/app/models',
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
        ),
        'bng\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
<<<<<<< HEAD
=======
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
<<<<<<< HEAD
        'bng\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'bng\\Controllers\\Main' => __DIR__ . '/../..' . '/app/controllers/Main.php',
        'bng\\Models\\Agents' => __DIR__ . '/../..' . '/app/Models/Agents.php',
        'bng\\Models\\BaseModel' => __DIR__ . '/../..' . '/app/Models/BaseModel.php',
        'bng\\System\\Database' => __DIR__ . '/../..' . '/app/system/Database.php',
        'bng\\System\\Router' => __DIR__ . '/../..' . '/app/system/Router.php',
=======
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
<<<<<<< HEAD
            $loader->prefixLengthsPsr4 = ComposerStaticInitc05f4b8920482513ea9cbe4aafdca7f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc05f4b8920482513ea9cbe4aafdca7f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc05f4b8920482513ea9cbe4aafdca7f5::$classMap;
=======
            $loader->prefixLengthsPsr4 = ComposerStaticInit080e2ccbecac0b0a0d365cb20495c659::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit080e2ccbecac0b0a0d365cb20495c659::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit080e2ccbecac0b0a0d365cb20495c659::$classMap;
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)

        }, null, ClassLoader::class);
    }
}
