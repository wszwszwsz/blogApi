<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Q6WdHFe' shared service.

return $this->privates['.service_locator.Q6WdHFe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\FrontController::main' => ['privates', '.service_locator.TwhmRPL', 'get_ServiceLocator_TwhmRPLService.php', true],
    'App\\Controller\\FrontController:main' => ['privates', '.service_locator.TwhmRPL', 'get_ServiceLocator_TwhmRPLService.php', true],
], [
    'App\\Controller\\FrontController::main' => '?',
    'App\\Controller\\FrontController:main' => '?',
]);
