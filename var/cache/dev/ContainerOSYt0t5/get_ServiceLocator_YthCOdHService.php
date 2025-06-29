<?php

namespace ContainerOSYt0t5;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YthCOdHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YthCOdH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YthCOdH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'calendarEntryRepository' => ['privates', 'App\\Repository\\CalendarEntryRepository', 'getCalendarEntryRepositoryService', true],
        ], [
            'calendarEntryRepository' => 'App\\Repository\\CalendarEntryRepository',
        ]);
    }
}
