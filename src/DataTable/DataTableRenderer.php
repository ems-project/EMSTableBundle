<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable;

use Twig\Environment;

class DataTableRenderer
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function render(): string
    {
        return $this->twig->render('@EMSTable/datatable.html.twig');
    }
}