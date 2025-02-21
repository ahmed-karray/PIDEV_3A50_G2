<?php

namespace ContainerCxvjKEi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HfIe8L8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hfIe8L8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hfIe8L8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\GestionEvent\\CourController::add' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\GestionEvent\\CourController::delete' => ['privates', '.service_locator.OMNEaQD', 'get_ServiceLocator_OMNEaQDService', true],
            'App\\Controller\\GestionEvent\\CourController::edit' => ['privates', '.service_locator.OMNEaQD', 'get_ServiceLocator_OMNEaQDService', true],
            'App\\Controller\\GestionEvent\\CourController::listCour' => ['privates', '.service_locator.jPHY6k7', 'get_ServiceLocator_JPHY6k7Service', true],
            'App\\Controller\\GestionEvent\\CourController::listCours' => ['privates', '.service_locator.jPHY6k7', 'get_ServiceLocator_JPHY6k7Service', true],
            'App\\Controller\\GestionEvent\\EventController::add' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\GestionEvent\\EventController::delete' => ['privates', '.service_locator.aOUxFCC', 'get_ServiceLocator_AOUxFCCService', true],
            'App\\Controller\\GestionEvent\\EventController::edit' => ['privates', '.service_locator.aOUxFCC', 'get_ServiceLocator_AOUxFCCService', true],
            'App\\Controller\\GestionEvent\\EventController::listEvent' => ['privates', '.service_locator.HmZDARG', 'get_ServiceLocator_HmZDARGService', true],
            'App\\Controller\\GestionEvent\\EventController::listEvents' => ['privates', '.service_locator.HmZDARG', 'get_ServiceLocator_HmZDARGService', true],
            'App\\Controller\\GestionUser\\DoctorRegistrationController::register' => ['privates', '.service_locator.e49KSBp', 'get_ServiceLocator_E49KSBpService', true],
            'App\\Controller\\GestionUser\\ForgotPasswordController::request' => ['privates', '.service_locator.pxIipq5', 'get_ServiceLocator_PxIipq5Service', true],
            'App\\Controller\\GestionUser\\GestionUserController::create' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\GestionUser\\GestionUserController::delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\GestionUser\\GestionUserController::edit' => ['privates', '.service_locator.vQH8NxC', 'get_ServiceLocator_VQH8NxCService', true],
            'App\\Controller\\GestionUser\\GestionUserController::list' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GestionUser\\RegistrationController::register' => ['privates', '.service_locator.Lm8Sh.h', 'get_ServiceLocator_Lm8Sh_HService', true],
            'App\\Controller\\GestionUser\\RegistrationController::verifyEmail' => ['privates', '.service_locator.uSVyOez', 'get_ServiceLocator_USVyOezService', true],
            'App\\Controller\\GestionUser\\ResetPasswordController::reset' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\GestionUser\\SecurityController::login' => ['privates', '.service_locator.Dssth9k', 'get_ServiceLocator_Dssth9kService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\GestionEvent\\CourController:add' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\GestionEvent\\CourController:delete' => ['privates', '.service_locator.OMNEaQD', 'get_ServiceLocator_OMNEaQDService', true],
            'App\\Controller\\GestionEvent\\CourController:edit' => ['privates', '.service_locator.OMNEaQD', 'get_ServiceLocator_OMNEaQDService', true],
            'App\\Controller\\GestionEvent\\CourController:listCour' => ['privates', '.service_locator.jPHY6k7', 'get_ServiceLocator_JPHY6k7Service', true],
            'App\\Controller\\GestionEvent\\CourController:listCours' => ['privates', '.service_locator.jPHY6k7', 'get_ServiceLocator_JPHY6k7Service', true],
            'App\\Controller\\GestionEvent\\EventController:add' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\GestionEvent\\EventController:delete' => ['privates', '.service_locator.aOUxFCC', 'get_ServiceLocator_AOUxFCCService', true],
            'App\\Controller\\GestionEvent\\EventController:edit' => ['privates', '.service_locator.aOUxFCC', 'get_ServiceLocator_AOUxFCCService', true],
            'App\\Controller\\GestionEvent\\EventController:listEvent' => ['privates', '.service_locator.HmZDARG', 'get_ServiceLocator_HmZDARGService', true],
            'App\\Controller\\GestionEvent\\EventController:listEvents' => ['privates', '.service_locator.HmZDARG', 'get_ServiceLocator_HmZDARGService', true],
            'App\\Controller\\GestionUser\\DoctorRegistrationController:register' => ['privates', '.service_locator.e49KSBp', 'get_ServiceLocator_E49KSBpService', true],
            'App\\Controller\\GestionUser\\ForgotPasswordController:request' => ['privates', '.service_locator.pxIipq5', 'get_ServiceLocator_PxIipq5Service', true],
            'App\\Controller\\GestionUser\\GestionUserController:create' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\GestionUser\\GestionUserController:delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\GestionUser\\GestionUserController:edit' => ['privates', '.service_locator.vQH8NxC', 'get_ServiceLocator_VQH8NxCService', true],
            'App\\Controller\\GestionUser\\GestionUserController:list' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GestionUser\\RegistrationController:register' => ['privates', '.service_locator.Lm8Sh.h', 'get_ServiceLocator_Lm8Sh_HService', true],
            'App\\Controller\\GestionUser\\RegistrationController:verifyEmail' => ['privates', '.service_locator.uSVyOez', 'get_ServiceLocator_USVyOezService', true],
            'App\\Controller\\GestionUser\\ResetPasswordController:reset' => ['privates', '.service_locator.ESgEUJd', 'get_ServiceLocator_ESgEUJdService', true],
            'App\\Controller\\GestionUser\\SecurityController:login' => ['privates', '.service_locator.Dssth9k', 'get_ServiceLocator_Dssth9kService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\GestionEvent\\CourController::add' => '?',
            'App\\Controller\\GestionEvent\\CourController::delete' => '?',
            'App\\Controller\\GestionEvent\\CourController::edit' => '?',
            'App\\Controller\\GestionEvent\\CourController::listCour' => '?',
            'App\\Controller\\GestionEvent\\CourController::listCours' => '?',
            'App\\Controller\\GestionEvent\\EventController::add' => '?',
            'App\\Controller\\GestionEvent\\EventController::delete' => '?',
            'App\\Controller\\GestionEvent\\EventController::edit' => '?',
            'App\\Controller\\GestionEvent\\EventController::listEvent' => '?',
            'App\\Controller\\GestionEvent\\EventController::listEvents' => '?',
            'App\\Controller\\GestionUser\\DoctorRegistrationController::register' => '?',
            'App\\Controller\\GestionUser\\ForgotPasswordController::request' => '?',
            'App\\Controller\\GestionUser\\GestionUserController::create' => '?',
            'App\\Controller\\GestionUser\\GestionUserController::delete' => '?',
            'App\\Controller\\GestionUser\\GestionUserController::edit' => '?',
            'App\\Controller\\GestionUser\\GestionUserController::list' => '?',
            'App\\Controller\\GestionUser\\RegistrationController::register' => '?',
            'App\\Controller\\GestionUser\\RegistrationController::verifyEmail' => '?',
            'App\\Controller\\GestionUser\\ResetPasswordController::reset' => '?',
            'App\\Controller\\GestionUser\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\GestionEvent\\CourController:add' => '?',
            'App\\Controller\\GestionEvent\\CourController:delete' => '?',
            'App\\Controller\\GestionEvent\\CourController:edit' => '?',
            'App\\Controller\\GestionEvent\\CourController:listCour' => '?',
            'App\\Controller\\GestionEvent\\CourController:listCours' => '?',
            'App\\Controller\\GestionEvent\\EventController:add' => '?',
            'App\\Controller\\GestionEvent\\EventController:delete' => '?',
            'App\\Controller\\GestionEvent\\EventController:edit' => '?',
            'App\\Controller\\GestionEvent\\EventController:listEvent' => '?',
            'App\\Controller\\GestionEvent\\EventController:listEvents' => '?',
            'App\\Controller\\GestionUser\\DoctorRegistrationController:register' => '?',
            'App\\Controller\\GestionUser\\ForgotPasswordController:request' => '?',
            'App\\Controller\\GestionUser\\GestionUserController:create' => '?',
            'App\\Controller\\GestionUser\\GestionUserController:delete' => '?',
            'App\\Controller\\GestionUser\\GestionUserController:edit' => '?',
            'App\\Controller\\GestionUser\\GestionUserController:list' => '?',
            'App\\Controller\\GestionUser\\RegistrationController:register' => '?',
            'App\\Controller\\GestionUser\\RegistrationController:verifyEmail' => '?',
            'App\\Controller\\GestionUser\\ResetPasswordController:reset' => '?',
            'App\\Controller\\GestionUser\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
