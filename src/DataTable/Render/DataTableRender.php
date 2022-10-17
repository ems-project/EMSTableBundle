<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable\Render;

use EMS\TableBundle\DataTable\DataTable;
use Twig\Environment;

class DataTableRender
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function render(DataTable $dataTable): string
    {
        return $this->twig->render('@EMSTable/datatable.html.twig', [
            'dataTable' => $dataTable,
        ]);
    }
}
