<?php

namespace ContainerHvZrj12;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lm8Sh_HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Lm8Sh.h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Lm8Sh.h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'security' => '?',
            'urlGenerator' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}
