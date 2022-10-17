<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable\Type;

class DataTableTypeRegistry
{
    /** @var array<class-string, DataTableTypeInterface> */
    private array $types = [];

    /**
     * @param iterable<DataTableTypeInterface> $types
     */
    public function __construct(iterable $types)
    {
        foreach ($types as $type) {
            $this->types[\get_class($type)] = $type;
        }
    }

    public function get(string $typeClass): ResolvedType
    {
        $type = $this->types[$typeClass] ?? null;

        if (null === $type) {
            throw new \RuntimeException(\sprintf('Could not find dataTable type %s', $typeClass));
        }

        return new ResolvedType($type);
    }
}
