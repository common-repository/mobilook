<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite87fe493468761395955cac168da75dc
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Pagup\\Mobilook\\Controllers\\AssetController' => __DIR__ . '/../..' . '/admin/controllers/AssetController.php',
        'Pagup\\Mobilook\\Controllers\\MetaboxController' => __DIR__ . '/../..' . '/admin/controllers/MetaboxController.php',
        'Pagup\\Mobilook\\Controllers\\SettingsController' => __DIR__ . '/../..' . '/admin/controllers/SettingsController.php',
        'Pagup\\Mobilook\\Core\\Asset' => __DIR__ . '/../..' . '/core/Asset.php',
        'Pagup\\Mobilook\\Core\\Option' => __DIR__ . '/../..' . '/core/Option.php',
        'Pagup\\Mobilook\\Core\\Plugin' => __DIR__ . '/../..' . '/core/Plugin.php',
        'Pagup\\Mobilook\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Pagup\\Mobilook\\Settings' => __DIR__ . '/../..' . '/admin/Settings.php',
        'Pagup\\Mobilook\\Traits\\NotificationHelperTrait' => __DIR__ . '/../..' . '/admin/traits/NotificationHelperTrait.php',
        'Pagup\\Mobilook\\Traits\\PluginHelperTrait' => __DIR__ . '/../..' . '/admin/traits/PluginHelperTrait.php',
        'Pagup\\Mobilook\\Traits\\PostTypeHelperTrait' => __DIR__ . '/../..' . '/admin/traits/PostTypeHelperTrait.php',
        'Pagup\\Mobilook\\Traits\\SanitizationTrait' => __DIR__ . '/../..' . '/admin/traits/SanitizationTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite87fe493468761395955cac168da75dc::$classMap;

        }, null, ClassLoader::class);
    }
}
