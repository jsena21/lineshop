<?php

namespace ContainerXpX1M9n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EDTE0SService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._EDTE0S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._EDTE0S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ArticleController::delete' => ['privates', '.service_locator.zwPUnYq', 'get_ServiceLocator_ZwPUnYqService', true],
            'App\\Controller\\ArticleController::edit' => ['privates', '.service_locator.zwPUnYq', 'get_ServiceLocator_ZwPUnYqService', true],
            'App\\Controller\\ArticleController::index' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.XqCCpgA', 'get_ServiceLocator_XqCCpgAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ArticleController:delete' => ['privates', '.service_locator.zwPUnYq', 'get_ServiceLocator_ZwPUnYqService', true],
            'App\\Controller\\ArticleController:edit' => ['privates', '.service_locator.zwPUnYq', 'get_ServiceLocator_ZwPUnYqService', true],
            'App\\Controller\\ArticleController:index' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.XqCCpgA', 'get_ServiceLocator_XqCCpgAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ArticleController::delete' => '?',
            'App\\Controller\\ArticleController::edit' => '?',
            'App\\Controller\\ArticleController::index' => '?',
            'App\\Controller\\ArticleController::new' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:delete' => '?',
            'App\\Controller\\ArticleController:edit' => '?',
            'App\\Controller\\ArticleController:index' => '?',
            'App\\Controller\\ArticleController:new' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
