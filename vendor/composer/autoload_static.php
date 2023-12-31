<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47677271fb56b8e14c4ee9627849dbcd
{
    public static $classMap = array (
        'App\\Controllers\\ArticleController' => __DIR__ . '/../..' . '/App/Controllers/ArticleController.php',
        'App\\Controllers\\PageController' => __DIR__ . '/../..' . '/App/Controllers/PageCotnroller.php',
        'ComposerAutoloaderInit47677271fb56b8e14c4ee9627849dbcd' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit47677271fb56b8e14c4ee9627849dbcd' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\App' => __DIR__ . '/../..' . '/Core/App.php',
        'Core\\Request' => __DIR__ . '/../..' . '/Core/Request.php',
        'Core\\Router' => __DIR__ . '/../..' . '/Core/Router.php',
        'Core\\database\\Connection' => __DIR__ . '/../..' . '/Core/database/Connection.php',
        'Core\\database\\QueryBuilder' => __DIR__ . '/../..' . '/Core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit47677271fb56b8e14c4ee9627849dbcd::$classMap;

        }, null, ClassLoader::class);
    }
}
