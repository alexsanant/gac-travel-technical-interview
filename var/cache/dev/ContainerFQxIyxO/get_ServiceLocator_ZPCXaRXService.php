<?php

namespace ContainerFQxIyxO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZPCXaRXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zPCXaRX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zPCXaRX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'stockHistoric' => ['privates', 'App\\Entity\\StockHistoric', 'getStockHistoricService', true],
        ], [
            'stockHistoric' => 'App\\Entity\\StockHistoric',
        ]);
    }
}
