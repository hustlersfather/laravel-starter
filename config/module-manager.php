<?php

return [

    /*
    |--------------------------------------------------------------------------
    | market Config
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => 'markets',

    'stubs' => [
        // 'path' => base_path('stubs/laravel-starter-stubs'),

        'path' => base_path('vendor/hustlersfather/market-manager/src/stubs'),
    ],

    'market' => [
        'files' => [
            'composer' => ['composer.stub', 'composer.json'],
            'json' => ['market.stub', 'market.json'],
            'config' => ['Config/config.stub', 'Config/config.php'],
            'database' => ['database/migrations/stubMigration.stub', 'database/migrations/stubMigration.php', 'rename'],
            'factories' => ['database/factories/stubFactory.stub', 'database/factories/stubFactory.php', 'rename'],
            'seeders' => ['database/seeders/stubSeeders.stub', 'database/seeders/stubSeeders.php', 'rename'],
            'command' => ['Console/Commands/StubCommand.stub', 'Console/Commands/StubCommand.php', 'rename'],
            'lang' => ['lang/en/text.stub', 'lang/en/text.php'],
            'models' => ['Models/stubModel.stub', 'Models/stubModel.php'],
            'providersRoute' => ['Providers/RouteServiceProvider.stub', 'Providers/RouteServiceProvider.php'],
            'providersEvent' => ['Providers/EventServiceProvider.stub', 'Providers/EventServiceProvider.php'],
            'providers' => ['Providers/stubServiceProvider.stub', 'Providers/stubServiceProvider.php'],
            'route_web' => ['routes/web.stub', 'routes/web.php'],
            'route_api' => ['routes/api.stub', 'routes/api.php'],
             'route_admin' => ['routes/admin.stub', 'routes/admin.php'],
             'route_admin' => ['routes/reseller.stub', 'routes/reseller.php'],
            'controller_admin' => ['Http/Controllers/admin/stubadminController.stub', 'Http/Controllers/admin/stubadminController.php'],
            'controller_frontend' => ['Http/Controllers/Frontend/stubFrontendController.stub', 'Http/Controllers/Frontend/stubFrontendController.php'],
            
            'views_admin_index' => ['Resources/views/admin/stubViews/index.blade.stub', 'Resources/views/admin/stubViews/index.blade.php'],
            'views_admin_index_datatable' => ['Resources/views/admin/stubViews/index_datatable.blade.stub', 'Resources/views/admin/stubViews/index_datatable.blade.php'],
            'views_admin_create' => ['Resources/views/admin/stubViews/create.blade.stub', 'Resources/views/admin/stubViews/create.blade.php'],
            'views_admin_form' => ['Resources/views/admin/stubViews/form.blade.stub', 'Resources/views/admin/stubViews/form.blade.php'],
            'views_admin_show' => ['Resources/views/admin/stubViews/show.blade.stub', 'Resources/views/admin/stubViews/show.blade.php'],
            'views_admin_edit' => ['Resources/views/admin/stubViews/edit.blade.stub', 'Resources/views/admin/stubViews/edit.blade.php'],
            'views_admin_trash' => ['Resources/views/admin/stubViews/trash.blade.stub', 'Resources/views/admin/stubViews/trash.blade.php'],
            
            'views_frontend_index' => ['Resources/views/frontend/stubViews/index.blade.stub', 'Resources/views/frontend/stubViews/index.blade.php'],
            'views_frontend_show' => ['Resources/views/frontend/stubViews/show.blade.stub', 'Resources/views/frontend/stubViews/show.blade.php'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | market Composer
    |--------------------------------------------------------------------------
    |
    | Config for the composer.json file
    |
    */

    'composer' => [
        'vendor' => 'nasirkhan',
        'author' => [
            'name' => 'Nasir Khan',
            'email' => 'nasir8891@gmail.com',
        ],
    ],

    'files' => [
        'market-list' => base_path('markets_statuses.json'),
    ],
];
