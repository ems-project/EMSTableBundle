<?php

declare(strict_types=1);

namespace EMS\TableBundle\Twig;

use EMS\TableBundle\DataTable\DataTable;
use EMS\TableBundle\DataTable\Render\DataTableRender;
use Twig\Extension\RuntimeExtensionInterface;

class TableRuntime implements RuntimeExtensionInterface
{
    private DataTableRender $dataTableRenderer;

    public function __construct(DataTableRender $dataTableRenderer)
    {
        $this->dataTableRenderer = $dataTableRenderer;
    }

    public function render(DataTable $dataTable): string
    {
        return $this->dataTableRenderer->render($dataTable);
    }
}
