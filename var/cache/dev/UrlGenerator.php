<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\FrontController::main'], [], [['text', '/']], [], []],
    'write_blog_page' => [[], ['_controller' => 'App\\Controller\\FrontController::writeBlogPage'], [], [['text', '/write-blog-page']], [], []],
    'write_blog' => [[], ['_controller' => 'App\\Controller\\FrontController::create'], [], [['text', '/write-blog']], [], []],
    'registry' => [[], ['_controller' => 'App\\Controller\\FrontController::registry'], [], [['text', '/registry']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\FrontController::login'], [], [['text', '/login']], [], []],
];
