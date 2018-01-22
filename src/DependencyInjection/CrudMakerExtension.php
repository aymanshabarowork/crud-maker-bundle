<?php

namespace Koff\Bundle\CrudMakerBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;

/**
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 */
class CrudMakerExtension extends Extension
{

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
//        $loader->load('services.xml');
//        $loader->load('makers.xml');
//
//        $container->registerForAutoconfiguration(MakerInterface::class)
//                  ->addTag(MakeCommandRegistrationPass::MAKER_TAG);
    }
}