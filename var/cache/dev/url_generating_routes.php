<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\Example1::index'], [], [['text', '/index']], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\Example1::main'], [], [['text', '/main']], [], []],
    'product' => [['num1', 'num2'], ['_controller' => 'App\\Controller\\Example1::product'], [], [['variable', '/', '[^/]++', 'num2', true], ['variable', '/', '[^/]++', 'num1', true], ['text', '/product']], [], []],
    'default1' => [['num'], ['num' => 3, '_controller' => 'App\\Controller\\Example1::default1'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/default1']], [], []],
    'app_examplebaseroute_hello' => [[], ['_controller' => 'App\\Controller\\ExampleBaseRoute::hello'], [], [['text', '/base/hello']], [], []],
    'app_exampledatabase_showteam' => [[], ['_controller' => 'App\\Controller\\ExampleDataBase::showTeam'], [], [['text', '/showTeam']], [], []],
    'showTeamNumber' => [['num'], ['_controller' => 'App\\Controller\\ExampleDataBase::showTeamNumber'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/showTeamNumber']], [], []],
    'app_exampledatabase_teamplayers' => [[], ['_controller' => 'App\\Controller\\ExampleDataBase::teamPlayers'], [], [['text', '/teamPlayers/{$id}']], [], []],
    'formHello' => [[], ['_controller' => 'App\\Controller\\ExampleForms::formHello'], [], [['text', '/formHello']], [], []],
    'newTeam' => [[], ['_controller' => 'App\\Controller\\ExampleForms::newTeam'], [], [['text', '/newTeam']], [], []],
    'sendEmail' => [[], ['_controller' => 'App\\Controller\\ExampleForms::sendEmail'], [], [['text', '/sendEmail']], [], []],
    'salutation' => [['name'], ['_controller' => 'App\\Controller\\ExampleTemplates::salutation'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/salutation']], [], []],
    'positive' => [['num'], ['_controller' => 'App\\Controller\\ExampleTemplates::positive'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/positive']], [], []],
    'table' => [[], ['_controller' => 'App\\Controller\\ExampleTemplates::table'], [], [['text', '/table/']], [], []],
    'paths' => [[], ['_controller' => 'App\\Controller\\ExampleTemplates::paths'], [], [['text', '/paths/']], [], []],
    'includet' => [[], ['_controller' => 'App\\Controller\\ExampleTemplates::includet'], [], [['text', '/includet/']], [], []],
    'showCat' => [[], ['_controller' => 'App\\Controller\\ExampleTemplates::showCat'], [], [['text', '/showCat/']], [], []],
    'remainder' => [['num1', 'num2'], ['num2' => 2, '_controller' => 'App\\Controller\\ExercisesCap8::remainder'], [], [['variable', '/', '[^/]++', 'num2', true], ['variable', '/', '[^/]++', 'num1', true], ['text', '/remainder']], [], []],
    'factorial' => [['num'], ['_controller' => 'App\\Controller\\ExercisesCap8::factorial'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/factorial']], [], []],
    'factorialTemplate' => [['num'], ['_controller' => 'App\\Controller\\ExercisesCap8::factorialTemplate'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/factorialTemplate']], [], []],
    'players' => [[], ['_controller' => 'App\\Controller\\ExercisesCap8::players'], [], [['text', '/players']], [], []],
    'teamPlayers' => [['id'], ['_controller' => 'App\\Controller\\ExercisesCap8::teamPlayers'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teamPlayers']], [], []],
    'teamPlayers2' => [['id'], ['_controller' => 'App\\Controller\\ExercisesCap8::teamPlayers2'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teamPlayers2']], [], []],
    'listlinks' => [[], ['_controller' => 'App\\Controller\\ExercisesCap8::listlinks'], [], [['text', '/listlinks']], [], []],
    'app_mailer_sendemail' => [[], ['_controller' => 'App\\Controller\\MailerController::sendEmail'], [], [['text', '/email']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'TestJSON' => [[], ['_controller' => 'App\\Controller\\TJSON::testJSON'], [], [['text', '/testJSON']], [], []],
];
