<?php

namespace ContainerCxvjKEi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForgotPasswordTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\GestionUser\ForgotPasswordType' shared autowired service.
     *
     * @return \App\Form\GestionUser\ForgotPasswordType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'GestionUser'.\DIRECTORY_SEPARATOR.'ForgotPasswordType.php';

        return $container->privates['App\\Form\\GestionUser\\ForgotPasswordType'] = new \App\Form\GestionUser\ForgotPasswordType();
    }
}
