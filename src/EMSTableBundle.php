<?php

declare(strict_types=1);

namespace EMS\TableBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EMSTableBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__, 1);
    }
}
