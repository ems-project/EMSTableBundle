<?php

declare(strict_types=1);

namespace EMS\TableBundle\Twig;

use EMS\TableBundle\DataTable\DataTableRenderer;
use Twig\Extension\RuntimeExtensionInterface;

class TableRuntime implements RuntimeExtensionInterface
{
    private DataTableRenderer $dataTableRenderer;

    public function __construct(DataTableRenderer $dataTableRenderer)
    {
        $this->dataTableRenderer = $dataTableRenderer;
    }

    public function render(): string
    {
        return $this->dataTableRenderer->render();
    }
}
