<?php
namespace Corley\FoundationModule;

use PHPUnit\Framework\TestCase;

use Psr\Container\ContainerInterface;

use Doctrine\Common\Cache\FilesystemCache;
use Doctrine\Common\Annotations\AnnotationReader;

use Acclimate\Container\CompositeContainer;

class FrameworkModuleTest extends TestCase
{
    public function testCreateBaseServiceManager()
    {
        $module = new FoundationModule(new CompositeContainer());
        $container = $module->getContainer();
        $this->assertInstanceOf(ContainerInterface::class, $container);
    }
}
