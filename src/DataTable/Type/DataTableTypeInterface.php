<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;

interface DataTableTypeInterface
{
    public function configureOptions(OptionsResolver $resolver): void;
}
