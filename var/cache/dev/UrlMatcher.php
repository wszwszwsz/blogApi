<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\FrontController::main'], null, null, null, false, false, null]],
        '/write-blog-page' => [[['_route' => 'write_blog_page', '_controller' => 'App\\Controller\\FrontController::writeBlogPage'], null, null, null, false, false, null]],
        '/write-blog' => [[['_route' => 'write_blog', '_controller' => 'App\\Controller\\FrontController::create'], null, null, null, false, false, null]],
        '/registry' => [[['_route' => 'registry', '_controller' => 'App\\Controller\\FrontController::registry'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\FrontController::login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
