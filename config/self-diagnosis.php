<?php

declare(strict_types=1);

use BeyondCode\SelfDiagnosis\Checks\AppKeyIsSet;
use BeyondCode\SelfDiagnosis\Checks\CorrectPhpVersionIsInstalled;
use BeyondCode\SelfDiagnosis\Checks\DatabaseCanBeAccessed;
use BeyondCode\SelfDiagnosis\Checks\DirectoriesHaveCorrectPermissions;
use BeyondCode\SelfDiagnosis\Checks\EnvFileExists;
use BeyondCode\SelfDiagnosis\Checks\ExampleEnvironmentVariablesAreSet;
use BeyondCode\SelfDiagnosis\Checks\MigrationsAreUpToDate;
use BeyondCode\SelfDiagnosis\Checks\PhpExtensionsAreInstalled;
use BeyondCode\SelfDiagnosis\Checks\StorageDirectoryIsLinked;
use BeyondCode\SelfDiagnosis\Checks\ComposerWithDevDependenciesIsUpToDate;
use BeyondCode\SelfDiagnosis\Checks\ConfigurationIsNotCached;
use BeyondCode\SelfDiagnosis\Checks\RoutesAreNotCached;
use BeyondCode\SelfDiagnosis\Checks\ComposerWithoutDevDependenciesIsUpToDate;
use BeyondCode\SelfDiagnosis\Checks\ConfigurationIsCached;
use BeyondCode\SelfDiagnosis\Checks\DebugModeIsNotEnabled;
use BeyondCode\SelfDiagnosis\Checks\PhpExtensionsAreDisabled;
use BeyondCode\SelfDiagnosis\Checks\RoutesAreCached;

return [
    // A list of environment aliases mapped to the actual environment configuration.
    'environment_aliases' => [
        'prod'  => 'production',
        'live'  => 'production',
        'local' => 'development',
    ],

    // Common checks that will be performed on all environments.
    'checks' => [
        AppKeyIsSet::class,
        CorrectPhpVersionIsInstalled::class,
        DatabaseCanBeAccessed::class => [
            'default_connection' => true,
            'connections'        => [],
        ],
        DirectoriesHaveCorrectPermissions::class => [
            'directories' => [
                storage_path(),
                base_path('bootstrap/cache'),
            ],
        ],
        EnvFileExists::class,
        ExampleEnvironmentVariablesAreSet::class,
        MigrationsAreUpToDate::class,
        PhpExtensionsAreInstalled::class => [
            'extensions' => [
                'openssl',
                'PDO',
                'mbstring',
                'tokenizer',
                'xml',
                'ctype',
                'json',
            ],
            'include_composer_extensions' => true,
        ],
        StorageDirectoryIsLinked::class,
    ],

    // Environment specific checks that will only be performed for the corresponding environment.
    'environment_checks' => [
        'development' => [
            ComposerWithDevDependenciesIsUpToDate::class,
            ConfigurationIsNotCached::class,
            RoutesAreNotCached::class,
        ],
        'production' => [
            ComposerWithoutDevDependenciesIsUpToDate::class,
            ConfigurationIsCached::class,
            DebugModeIsNotEnabled::class,
            PhpExtensionsAreDisabled::class => [
                'extensions' => [
                    'xdebug',
                ],
            ],
            RoutesAreCached::class,
        ],
    ],
];
