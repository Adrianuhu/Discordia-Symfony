<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\Example1::home'], null, null, null, false, false, null]],
        '/testRequest' => [[['_route' => 'testRequest', '_controller' => 'App\\Controller\\Example1::testRequest'], null, null, null, false, false, null]],
        '/session1' => [[['_route' => 'session1', '_controller' => 'App\\Controller\\Example1::session1'], null, null, null, false, false, null]],
        '/session2' => [[['_route' => 'session2', '_controller' => 'App\\Controller\\Example1::session2'], null, null, null, false, false, null]],
        '/base/hello' => [[['_route' => 'app_examplebaseroute_hello', '_controller' => 'App\\Controller\\ExampleBaseRoute::hello'], null, null, null, false, false, null]],
        '/showTeam' => [[['_route' => 'app_exampledatabase_showteam', '_controller' => 'App\\Controller\\ExampleDataBase::showTeam'], null, null, null, false, false, null]],
        '/teamPlayers/{$id}' => [[['_route' => 'app_exampledatabase_teamplayers', '_controller' => 'App\\Controller\\ExampleDataBase::teamPlayers'], null, null, null, false, false, null]],
        '/formHello' => [[['_route' => 'formHello', '_controller' => 'App\\Controller\\ExampleForms::formHello'], null, null, null, false, false, null]],
        '/newTeam' => [[['_route' => 'newTeam', '_controller' => 'App\\Controller\\ExampleForms::newTeam'], null, null, null, false, false, null]],
        '/sendEmail' => [[['_route' => 'sendEmail', '_controller' => 'App\\Controller\\ExampleForms::sendEmail'], null, null, null, false, false, null]],
        '/table' => [[['_route' => 'table', '_controller' => 'App\\Controller\\ExampleTemplates::table'], null, null, null, true, false, null]],
        '/paths' => [[['_route' => 'paths', '_controller' => 'App\\Controller\\ExampleTemplates::paths'], null, null, null, true, false, null]],
        '/includet' => [[['_route' => 'includet', '_controller' => 'App\\Controller\\ExampleTemplates::includet'], null, null, null, true, false, null]],
        '/showCat' => [[['_route' => 'showCat', '_controller' => 'App\\Controller\\ExampleTemplates::showCat'], null, null, null, true, false, null]],
        '/players' => [[['_route' => 'players', '_controller' => 'App\\Controller\\ExercisesCap8::players'], null, null, null, false, false, null]],
        '/listlinks' => [[['_route' => 'listlinks', '_controller' => 'App\\Controller\\ExercisesCap8::listlinks'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/testJSON' => [[['_route' => 'TestJSON', '_controller' => 'App\\Controller\\TJSON::testJSON'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/p(?'
                    .'|roduct/([^/]++)/([^/]++)(*:198)'
                    .'|ositive/([^/]++)(*:222)'
                .')'
                .'|/default(?'
                    .'|1(?:/([^/]++))?(*:257)'
                    .'|2(?:/([^/]++))?(*:280)'
                .')'
                .'|/s(?'
                    .'|quare/([^/]++)(*:308)'
                    .'|howTeamNumber/([^/]++)(*:338)'
                    .'|alutation/([^/]++)(*:364)'
                .')'
                .'|/remainder/([^/]++)(?:/([^/]++))?(*:406)'
                .'|/factorial(?'
                    .'|/([^/]++)(*:436)'
                    .'|Template/([^/]++)(*:461)'
                .')'
                .'|/teamPlayers(?'
                    .'|/([^/]++)(*:494)'
                    .'|2/([^/]++)(*:512)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'product', '_controller' => 'App\\Controller\\Example1::product'], ['num1', 'num2'], null, null, false, true, null]],
        222 => [[['_route' => 'positive', '_controller' => 'App\\Controller\\ExampleTemplates::positive'], ['num'], null, null, false, true, null]],
        257 => [[['_route' => 'default1', 'num' => 3, '_controller' => 'App\\Controller\\Example1::default1'], ['num'], null, null, false, true, null]],
        280 => [[['_route' => 'default2', 'num' => '4', '_controller' => 'App\\Controller\\Example1::default2'], ['num'], null, null, false, true, null]],
        308 => [[['_route' => 'square', '_controller' => 'App\\Controller\\Example1::square'], ['num'], null, null, false, true, null]],
        338 => [[['_route' => 'showTeamNumber', '_controller' => 'App\\Controller\\ExampleDataBase::showTeamNumber'], ['num'], null, null, false, true, null]],
        364 => [[['_route' => 'salutation', '_controller' => 'App\\Controller\\ExampleTemplates::salutation'], ['name'], null, null, false, true, null]],
        406 => [[['_route' => 'remainder', 'num2' => 2, '_controller' => 'App\\Controller\\ExercisesCap8::remainder'], ['num1', 'num2'], null, null, false, true, null]],
        436 => [[['_route' => 'factorial', '_controller' => 'App\\Controller\\ExercisesCap8::factorial'], ['num'], null, null, false, true, null]],
        461 => [[['_route' => 'factorialTemplate', '_controller' => 'App\\Controller\\ExercisesCap8::factorialTemplate'], ['num'], null, null, false, true, null]],
        494 => [[['_route' => 'teamPlayers', '_controller' => 'App\\Controller\\ExercisesCap8::teamPlayers'], ['id'], null, null, false, true, null]],
        512 => [
            [['_route' => 'teamPlayers2', '_controller' => 'App\\Controller\\ExercisesCap8::teamPlayers2'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
