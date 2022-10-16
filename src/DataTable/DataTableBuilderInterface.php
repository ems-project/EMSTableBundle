<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable;

interface DataTableBuilderInterface
{
    public function build(): void;
}
