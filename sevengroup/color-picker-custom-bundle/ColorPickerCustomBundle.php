<?php

namespace Sevengroup\Sulu\Bundle\ColorPickerCustomBundle;

use Sulu\Bundle\AdminBundle\DependencyInjection\Compiler\AddAdminPass;
use Sulu\Bundle\AdminBundle\DependencyInjection\Compiler\AddMetadataProviderPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ColorPickerCustomBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AddAdminPass());
        $container->addCompilerPass(new AddMetadataProviderPass());
    }
}
