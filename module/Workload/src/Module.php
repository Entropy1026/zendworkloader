<?php

namespace Workload;

class Module
{

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    public function getControllerConfig()
    {
        // return [
        //     'factories' => [
        //         Controller\WorklistController::class => function ($container) {
        //             return new Controller\WorklistController(
        //                  $container->get(Model\WorklistTable::class)
        //             );
        //         },
        //     ],
        // ];
    }
}
