<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'bng\\System\\' => array($baseDir . '/app/system'),
<<<<<<< HEAD
    'bng\\Models\\' => array($baseDir . '/app/Models'),
    'bng\\Controllers\\' => array($baseDir . '/app/controllers'),
=======
    'bng\\Models\\' => array($baseDir . '/app/models'),
    'bng\\Controllers\\' => array($baseDir . '/app/controllers'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/src'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
);
