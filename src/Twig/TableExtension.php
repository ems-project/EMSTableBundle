<?php

declare(strict_types=1);

namespace EMS\TableBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TableExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('ems_table_render', [TableRuntime::class, 'render'], ['is_safe' => ['html']]),
        ];
    }
}
