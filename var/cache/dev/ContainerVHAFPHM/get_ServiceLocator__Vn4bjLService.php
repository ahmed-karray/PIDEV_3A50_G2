<?php

namespace ContainerVHAFPHM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Vn4bjLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..vn4bjL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..vn4bjL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'planningRepository' => ['privates', 'App\\Repository\\PlanningRepository', 'getPlanningRepositoryService', true],
        ], [
            'planningRepository' => 'App\\Repository\\PlanningRepository',
        ]);
    }
}
