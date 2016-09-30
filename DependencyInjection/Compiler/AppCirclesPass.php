<?php

namespace Librinfo\SeedBatchBundle\DependencyInjection\Compiler;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class AppCirclesPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $dir = __DIR__ . '/../../Resources/config';
        $file_name = 'circles.yml';
        $loader = new YamlFileLoader($newContainer = new ContainerBuilder(), new FileLocator($dir));
        $loader->load($file_name);

        $librinfo_crm = $container->getParameter('librinfo_crm');
        $librinfo_crm['Circle']['app_circles'] = array_merge(
            $librinfo_crm['Circle']['app_circles'],
            $newContainer->getParameter('librinfo_crm')['Circle']['app_circles']
        );

        $container->setParameter('librinfo_crm', $librinfo_crm);
    }
}