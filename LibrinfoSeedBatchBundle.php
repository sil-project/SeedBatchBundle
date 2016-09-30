<?php

namespace Librinfo\SeedBatchBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Librinfo\SeedBatchBundle\DependencyInjection\Compiler\AppCirclesPass;

class LibrinfoSeedBatchBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AppCirclesPass());
    }
}
