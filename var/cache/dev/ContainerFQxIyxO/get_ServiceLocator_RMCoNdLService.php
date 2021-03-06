<?php

namespace ContainerFQxIyxO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RMCoNdLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rMCoNdL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rMCoNdL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.bw8tvv2', 'get_ServiceLocator_Bw8tvv2Service', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.bw8tvv2', 'get_ServiceLocator_Bw8tvv2Service', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\CategoryController::new' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\CategoryController::show' => ['privates', '.service_locator.7P87fGM', 'get_ServiceLocator_7P87fGMService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.Niycchk', 'get_ServiceLocator_NiycchkService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.Niycchk', 'get_ServiceLocator_NiycchkService', true],
            'App\\Controller\\ProductController::editStock' => ['privates', '.service_locator.Niycchk', 'get_ServiceLocator_NiycchkService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController::new' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.5OibA2.', 'get_ServiceLocator_5OibA2_Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.x__eXbe', 'get_ServiceLocator_XEXbeService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\StockHistoricController::delete' => ['privates', '.service_locator.LBuiBjb', 'get_ServiceLocator_LBuiBjbService', true],
            'App\\Controller\\StockHistoricController::edit' => ['privates', '.service_locator.LBuiBjb', 'get_ServiceLocator_LBuiBjbService', true],
            'App\\Controller\\StockHistoricController::index' => ['privates', '.service_locator.TEbuycH', 'get_ServiceLocator_TEbuycHService', true],
            'App\\Controller\\StockHistoricController::new' => ['privates', '.service_locator.TEbuycH', 'get_ServiceLocator_TEbuycHService', true],
            'App\\Controller\\StockHistoricController::show' => ['privates', '.service_locator.zPCXaRX', 'get_ServiceLocator_ZPCXaRXService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Ej7f_SL', 'get_ServiceLocator_Ej7fSLService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.bw8tvv2', 'get_ServiceLocator_Bw8tvv2Service', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.bw8tvv2', 'get_ServiceLocator_Bw8tvv2Service', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\CategoryController:new' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\CategoryController:show' => ['privates', '.service_locator.7P87fGM', 'get_ServiceLocator_7P87fGMService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.Niycchk', 'get_ServiceLocator_NiycchkService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.Niycchk', 'get_ServiceLocator_NiycchkService', true],
            'App\\Controller\\ProductController:editStock' => ['privates', '.service_locator.Niycchk', 'get_ServiceLocator_NiycchkService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController:new' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.5OibA2.', 'get_ServiceLocator_5OibA2_Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.x__eXbe', 'get_ServiceLocator_XEXbeService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\StockHistoricController:delete' => ['privates', '.service_locator.LBuiBjb', 'get_ServiceLocator_LBuiBjbService', true],
            'App\\Controller\\StockHistoricController:edit' => ['privates', '.service_locator.LBuiBjb', 'get_ServiceLocator_LBuiBjbService', true],
            'App\\Controller\\StockHistoricController:index' => ['privates', '.service_locator.TEbuycH', 'get_ServiceLocator_TEbuycHService', true],
            'App\\Controller\\StockHistoricController:new' => ['privates', '.service_locator.TEbuycH', 'get_ServiceLocator_TEbuycHService', true],
            'App\\Controller\\StockHistoricController:show' => ['privates', '.service_locator.zPCXaRX', 'get_ServiceLocator_ZPCXaRXService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Ej7f_SL', 'get_ServiceLocator_Ej7fSLService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::new' => '?',
            'App\\Controller\\CategoryController::show' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::editStock' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::new' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StockHistoricController::delete' => '?',
            'App\\Controller\\StockHistoricController::edit' => '?',
            'App\\Controller\\StockHistoricController::index' => '?',
            'App\\Controller\\StockHistoricController::new' => '?',
            'App\\Controller\\StockHistoricController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:new' => '?',
            'App\\Controller\\CategoryController:show' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:editStock' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:new' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StockHistoricController:delete' => '?',
            'App\\Controller\\StockHistoricController:edit' => '?',
            'App\\Controller\\StockHistoricController:index' => '?',
            'App\\Controller\\StockHistoricController:new' => '?',
            'App\\Controller\\StockHistoricController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
