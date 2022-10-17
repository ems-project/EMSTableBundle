<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable\Factory;

use EMS\TableBundle\DataTable\DataTable;
use EMS\TableBundle\DataTable\DataTableInterface;
use EMS\TableBundle\DataTable\Type\DataTableTypeRegistry;

class DataTableFactory implements DataTableFactoryInterface
{
    private DataTableTypeRegistry $typeRegistry;

    public function __construct(DataTableTypeRegistry $typeRegistry)
    {
        $this->typeRegistry = $typeRegistry;
    }

    public function create(string $dataTableType, array $options = []): DataTableInterface
    {
        $type = $this->typeRegistry->get($dataTableType);
        $options = $type->resolveOptions($options);

        return new DataTable($options['id']);
    }
}
