<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable\Factory;

use EMS\TableBundle\DataTable\DataTableInterface;

interface DataTableFactoryInterface
{
    /**
     * @param class-string $dataTableType
     * @param array<mixed> $options
     */
    public function create(string $dataTableType, array $options = []): DataTableInterface;
}
