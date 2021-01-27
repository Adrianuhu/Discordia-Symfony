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
        '/testRequest' => [[['_route' => 'testRequest', '_controller' => 'App\\Controller\\Example1::testRequest'], null, null, null, false, false, null]],
        '/session1' => [[['_route' => 'session1', '_controller' => 'App\\Controller\\Example1::session1'], null, null, null, false, false, null]],
        '/session2' => [[['_route' => 'session2', '_controller' => 'App\\Controller\\Example1::session2'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\OrdersBase::home'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\OrdersBase::categories'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\OrdersBase::cart'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\OrdersBase::add'], null, null, null, false, false, null]],
        '/remove' => [[['_route' => 'remove', '_controller' => 'App\\Controller\\OrdersBase::remove'], null, null, null, false, false, null]],
        '/processOrder' => [[['_route' => 'processOrder', '_controller' => 'App\\Controller\\OrdersBase::processOrder'], null, null, null, false, false, null]],
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
                .'|/product(?'
                    .'|/([^/]++)/([^/]++)(*:198)'
                    .'|s/([^/]++)(*:216)'
                .')'
                .'|/default(?'
                    .'|1(?:/([^/]++))?(*:251)'
                    .'|2(?:/([^/]++))?(*:274)'
                .')'
                .'|/square/([^/]++)(*:299)'
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
        216 => [[['_route' => 'products', '_controller' => 'App\\Controller\\OrdersBase::products'], ['id'], null, null, false, true, null]],
        251 => [[['_route' => 'default1', 'num' => 3, '_controller' => 'App\\Controller\\Example1::default1'], ['num'], null, null, false, true, null]],
        274 => [[['_route' => 'default2', 'num' => '4', '_controller' => 'App\\Controller\\Example1::default2'], ['num'], null, null, false, true, null]],
        299 => [
            [['_route' => 'square', '_controller' => 'App\\Controller\\Example1::square'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
