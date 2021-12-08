<?php
namespace Tommysonsylverstone\ComposerTest\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension as Extensions;

/**
 * SecurityHeadersExtension
 */
class ColorPickerCustomExtension extends Extension
{
    protected $test = new Extensions;
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        foreach ($config as $key => $value) {
            $container->setParameter('security_headers.' . $key, $value);
        }
        $this->test->addAnnotatedClassesToCompile([
            'Tommysonsylverstone\ComposerTest\Content\Types\ColorPickerCustomTest',
        ]);
    }
}