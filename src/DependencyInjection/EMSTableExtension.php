<?php

declare(strict_types=1);

namespace EMS\TableBundle\DependencyInjection;

use EMS\TableBundle\DataTable\Type\DataTableTypeInterface;
use EMS\TableBundle\EMSTableBundle;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class EMSTableExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $xmlLoader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $xmlLoader->load('data_table.xml');

        $container
            ->registerForAutoconfiguration(DataTableTypeInterface::class)
            ->addTag(EMSTableBundle::TAG_DATATABLE);
    }
}
