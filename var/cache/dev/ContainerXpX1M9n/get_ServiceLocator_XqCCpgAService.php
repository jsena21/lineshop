<?php

namespace ContainerXpX1M9n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XqCCpgAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XqCCpgA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XqCCpgA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'article' => ['privates', '.errored..service_locator.XqCCpgA.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.XqCCpgA": it needs an instance of "App\\Entity\\Article" but this type has been excluded in "config/services.yaml".'],
        ], [
            'article' => 'App\\Entity\\Article',
        ]);
    }
}
