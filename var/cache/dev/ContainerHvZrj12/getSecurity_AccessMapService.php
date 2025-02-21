<?php

namespace ContainerHvZrj12;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMap.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'ChainRequestMatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcher'.\DIRECTORY_SEPARATOR.'PathRequestMatcher.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'expression-language'.\DIRECTORY_SEPARATOR.'Expression.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/(forgot-password|reset-password)')]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/(login|register|register/patient|register/doctor)$')]), ['PUBLIC_ACCESS', ($container->privates['.security.expression.KSRr5b1'] ??= new \Symfony\Component\ExpressionLanguage\Expression('not is_granted(\'IS_AUTHENTICATED_FULLY\')'))], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/verify')]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/$')]), ['PUBLIC_ACCESS'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/admin')]), ['ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/planning')]), ['IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/appointment')]), ['IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\ChainRequestMatcher([new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/')]), ['IS_AUTHENTICATED_FULLY', ($container->privates['.security.expression.JdWgH9m'] ??= new \Symfony\Component\ExpressionLanguage\Expression('user.getIsVerified() == true'))], NULL);

        return $instance;
    }
}
