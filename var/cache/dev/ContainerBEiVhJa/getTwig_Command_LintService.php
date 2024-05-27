<?php

namespace ContainerBEiVhJa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Command_LintService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Command/LintCommand.php';

        $container->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($container->privates['twig'] ?? self::getTwigService($container)), ['*.twig']);

        $instance->setName('lint:twig');
        $instance->setDescription('Lint a Twig template and outputs encountered errors');

        return $instance;
    }
}
