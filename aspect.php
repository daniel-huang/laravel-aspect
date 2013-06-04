<?php
include __DIR__.'/vendor/lisachenko/go-aop-php/src/Go/Core/AspectKernel.php';
include __DIR__.'/app/aspects/DemoAspectKernel.php';

// Prevent an error about nesting level
ini_set('xdebug.max_nesting_level', 300);

// Initialize aspect container
$aspectKernel = DemoAspectKernel::getInstance();
$aspectKernel->init(array(
    'autoload' => array(
        'Aspect'           => __DIR__.'/app/aspects',
        'Go'               => __DIR__.'/vendor/lisachenko/go-aop-php/src/',
        'TokenReflection'  => __DIR__.'/vendor/andrewsville/php-token-reflection/',
        'Doctrine\\Common' => __DIR__.'/vendor/doctrine/common/lib/'
    ),
    'includePaths' => array(),
    'cacheDir' => __DIR__.'/app/storage/cache/aspect/',
    'appDir'   => __DIR__,
    'debug' => true,
));