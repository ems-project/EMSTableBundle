<?php

declare(strict_types=1);

namespace EMS\TableBundle\DataTable\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;

use function Symfony\Component\String\u;

class ResolvedType
{
    private DataTableTypeInterface $type;

    public function __construct(DataTableTypeInterface $type)
    {
        $this->type = $type;
    }

    /**
     * @param array<mixed> $options
     *
     * @return array<mixed>|array{id: string}
     */
    public function resolveOptions(array $options): array
    {
        $optionsResolver = new OptionsResolver();
        $this->type->configureOptions($optionsResolver);

        $optionsResolver
            ->setRequired(['id'])
            ->setDefaults(['id' => $this->makeId()]);

        return $optionsResolver->resolve($options);
    }

    private function makeId(): string
    {
        $typeClass = new \ReflectionClass($this->type);

        return u($typeClass->getShortName())->snake()->replace('_', '-')->replace('-data-table-type', '')->toString();
    }
}
