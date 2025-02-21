<?php

namespace ContainerRgxddya;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_ImportmapService extends App_KernelProdContainer
{
    /*
     * Gets the private 'twig.runtime.importmap' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ImportMapRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['twig.runtime.importmap'] = new \Symfony\Bridge\Twig\Extension\ImportMapRuntime(new \Symfony\Component\AssetMapper\ImportMap\ImportMapRenderer(($container->privates['asset_mapper.importmap.generator'] ?? $container->load('getAssetMapper_Importmap_GeneratorService')), ($container->privates['assets.packages'] ?? $container->load('getAssets_PackagesService')), 'UTF-8', 'es-module-shims', ['data-turbo-track' => 'reload'], ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
