<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/blog/([^/]++)(*:21)'
                .'|/detail/([^/]++)(*:44)'
                .'|/formulaire/([^/]++)(*:71)'
                .'|/petition/([^/]++)(*:96)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null]],
        44 => [[['_route' => 'show_compterendu', '_controller' => 'App\\Controller\\CompteRendusController::showCompteRendu'], ['id'], null, null, false, true, null]],
        71 => [[['_route' => 'showform', '_controller' => 'App\\Controller\\FormulaireController::show'], ['id'], null, null, false, true, null]],
        96 => [
            [['_route' => 'singlepetition', '_controller' => 'App\\Controller\\PetitionController::singlepetition'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
