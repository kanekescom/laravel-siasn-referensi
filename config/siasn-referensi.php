<?php

return [

    'name' => 'SISASN REFERENSI',

    'chunk_data' => 500,

    'truncate_model_before_pull' => true,

    'filament' => [

        'path' => 'siasn/referensi',

        'domain' => null,

        'brandName' => null,

        'brandLogo' => null,

        'brandLogoHeight' => null,

        'favicon' => null,

        'colors' => [
            'primary' => \Filament\Support\Colors\Color::Amber,
        ],

        'darkMode' => [
            'enabled' => true,
        ],

        'topbar' => [
            'enabled' => true,
        ],

        'topNavigation' => [
            'enabled' => false,
        ],

        'breadcrumbs' => [
            'enabled' => false,
        ],

        'databaseNotifications' => [
            'enabled' => false,
            'polling' => '30s',
        ],

        'spa' => [
            'enabled' => true,
        ],

        'unsavedChangesAlerts' => [
            'enabled' => false,
        ],

        'databaseTransactions' => [
            'enabled' => true,
        ],

        'sidebarCollapsibleOnDesktop' => [
            'enabled' => true,
        ],

        'sidebarFullyCollapsibleOnDesktop' => [
            'enabled' => true,
        ],

        'navigation' => [
            'enabled' => true,
        ],

        'collapsibleNavigationGroups' => [
            'enabled' => true,
        ],

        'navigationGroups' => [],

    ],

];
