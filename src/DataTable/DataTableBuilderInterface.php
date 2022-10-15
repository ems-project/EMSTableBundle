<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTableBuilder;

interface DataTableBuilderInterface
{
    public function build(): void;
}
