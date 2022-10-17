<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractOrmDataTableType implements DataTableTypeInterface
{
    public function configureOptions(OptionsResolver $resolver): void
    {
    }
}
