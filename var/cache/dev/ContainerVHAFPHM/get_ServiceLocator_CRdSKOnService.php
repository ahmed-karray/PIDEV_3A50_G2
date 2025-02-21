<?php

namespace ContainerVHAFPHM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CRdSKOnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cRdSKOn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cRdSKOn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'appointmentRepository' => ['privates', 'App\\Repository\\AppointmentRepository', 'getAppointmentRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.cRdSKOn.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.cRdSKOn": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'appointmentRepository' => 'App\\Repository\\AppointmentRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
