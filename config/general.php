<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

return [
    // Set the default week start day for date pickers (0 = Sunday, 1 = Monday, etc.)
    'defaultWeekStartDay' => 1,
    // Prevent generated URLs from including "index.php"
    'omitScriptNameInUrls' => true,
    // Preload Single entries as Twig variables
    'preloadSingles' => true,
    // Prevent user enumeration attacks
    'preventUserEnumeration' => true,
    // Set the @webroot alias so the clear-caches command knows where to find CP resources
    'aliases' => [
        '@webroot' => dirname(__DIR__) . '/web',
    ],
];
