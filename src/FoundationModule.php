<?php
namespace Corley\FoundationModule;

use Corley\Modular\Module\ModuleInterface;
use Psr\Container\ContainerInterface;
use DI\ContainerBuilder;

class FoundationModule implements ModuleInterface
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getContainer()
    {
        // Annotation Container
        $builder = new ContainerBuilder();

        $builder->useAnnotations(true);
        $builder->wrapContainer($this->container);

        $phpdiContainer = $builder->build();

        return $phpdiContainer;
    }
}
