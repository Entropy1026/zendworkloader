<?php

namespace Workload\Factory;

use Workload\Controller\WorklistController;
use Workload\Model\PostRepositoryInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;


class WorklistControllerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return WorklistController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new WorklistController($container->get(PostRepositoryInterface::class));
    }
}