<?php

namespace ContainerHvZrj12;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E49KSBpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e49KSBp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e49KSBp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'passwordHasher' => '?',
            'security' => '?',
            'urlGenerator' => '?',
        ]);
    }
}
