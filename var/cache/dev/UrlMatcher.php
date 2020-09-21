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
        '/actualites' => [[['_route' => 'actualites', '_controller' => 'App\\Controller\\ActualitesController::index'], null, null, null, false, false, null]],
        '/association' => [[['_route' => 'association', '_controller' => 'App\\Controller\\AssociationController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/citoyens' => [[['_route' => 'citoyens', '_controller' => 'App\\Controller\\CitoyensController::index'], null, null, null, false, false, null]],
        '/compte/rendus' => [[['_route' => 'compte_rendus', '_controller' => 'App\\Controller\\CompteRendusController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\CotisationController::paypal'], null, null, null, false, false, null]],
        '/formulaire' => [[['_route' => 'formulaire', '_controller' => 'App\\Controller\\FormulaireController::index'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'gallery', '_controller' => 'App\\Controller\\GalleryController::index'], null, null, null, false, false, null]],
        '/petition' => [[['_route' => 'petition', '_controller' => 'App\\Controller\\PetitionController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login_index', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
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
                .'|/blog/([^/]++)(*:183)'
                .'|/detail/([^/]++)(*:207)'
                .'|/formulaire/([^/]++)(*:235)'
                .'|/petition/([^/]++)(*:261)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [[['_route' => 'show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'show_compterendu', '_controller' => 'App\\Controller\\CompteRendusController::showCompteRendu'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'showform', '_controller' => 'App\\Controller\\FormulaireController::show'], ['id'], null, null, false, true, null]],
        261 => [
            [['_route' => 'singlepetition', '_controller' => 'App\\Controller\\PetitionController::singlepetition'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
