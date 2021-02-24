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
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\ChatMain::test'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ChatMain::index'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\ChatMain::main'], null, null, null, false, false, null]],
        '/friend' => [[['_route' => 'friend', '_controller' => 'App\\Controller\\ChatMain::friend'], null, null, null, false, false, null]],
        '/chat_AJAX' => [[['_route' => 'chat_AJAX', '_controller' => 'App\\Controller\\ChatMain::chat_AJAX'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts', '_controller' => 'App\\Controller\\ChatMain::contacts'], null, null, null, false, false, null]],
        '/profFriend' => [[['_route' => 'profFriend', '_controller' => 'App\\Controller\\ChatMain::profFriend'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ChatMain::profile'], null, null, null, false, false, null]],
        '/search_bar' => [[['_route' => 'search_bar', '_controller' => 'App\\Controller\\ChatMain::search_bar'], null, null, null, false, false, null]],
        '/send_message_newMessage_AJAX' => [[['_route' => 'send_message_newMessage_AJAX', '_controller' => 'App\\Controller\\ChatMain::send_message_newMessage_AJAX'], null, null, null, false, false, null]],
        '/send_message_AJAX' => [[['_route' => 'send_message_AJAX', '_controller' => 'App\\Controller\\ChatMain::send_message_AJAX'], null, null, null, false, false, null]],
        '/search_bar_friend' => [[['_route' => 'search_bar_friend', '_controller' => 'App\\Controller\\ChatMain::search_bar_friend'], null, null, null, false, false, null]],
        '/sendFriendship' => [[['_route' => 'sendFriendship', '_controller' => 'App\\Controller\\ChatMain::sendFriendship'], null, null, null, false, false, null]],
        '/newGroup' => [[['_route' => 'newGroup', '_controller' => 'App\\Controller\\ChatMain::newGroup'], null, null, null, false, false, null]],
        '/createNewGroup' => [[['_route' => 'createNewGroup', '_controller' => 'App\\Controller\\ChatMain::createNewGroup'], null, null, null, false, false, null]],
        '/allUser' => [[['_route' => 'allUser', '_controller' => 'App\\Controller\\ChatMain::allUser'], null, null, null, false, false, null]],
        '/acceptFriend' => [[['_route' => 'acceptFriend', '_controller' => 'App\\Controller\\ChatMain::acceptFriend'], null, null, null, false, false, null]],
        '/denyFriend' => [[['_route' => 'denyFriend', '_controller' => 'App\\Controller\\ChatMain::denyFriend'], null, null, null, false, false, null]],
        '/request_friend' => [[['_route' => 'request_friend', '_controller' => 'App\\Controller\\ChatMain::request_friend'], null, null, null, false, false, null]],
        '/send' => [[['_route' => 'send', '_controller' => 'App\\Controller\\ChatMain::send'], null, null, null, false, false, null]],
        '/upload_files' => [[['_route' => 'upload_files', '_controller' => 'App\\Controller\\ChatMain::upload_files'], null, null, null, false, false, null]],
        '/uploadProfile' => [[['_route' => 'uploadProfile', '_controller' => 'App\\Controller\\ChatMain::uploadProfile'], null, null, null, false, false, null]],
        '/delteUser' => [[['_route' => 'delteUser', '_controller' => 'App\\Controller\\ChatMain::delteUser'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\UserRegister::register'], null, null, null, false, false, null]],
        '/registerU' => [[['_route' => 'registerU', '_controller' => 'App\\Controller\\UserRegister::registerU'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
