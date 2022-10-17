<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable;

class DataTable implements DataTableInterface
{
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
