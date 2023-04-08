<?php

namespace ContainerUvl4Uh7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReadingTimeCalculatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\ReadingTimeCalculator' shared autowired service.
     *
     * @return \App\Service\ReadingTimeCalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ReadingTimeCalculator.php';

        return $container->services['App\\Service\\ReadingTimeCalculator'] = new \App\Service\ReadingTimeCalculator();
    }
}
