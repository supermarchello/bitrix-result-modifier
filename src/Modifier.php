<?php

declare(strict_types=1);

namespace Supermarchello\BitrixResultModifier;

final class Modifier
{
    /**
     * @var array
     */
    private $modifiersPool = [];

    public function addModifier(ModifierInterface $modifier): self
    {
        $this->modifiersPool[] = $modifier;

        return $this;
    }

    public function applyModifications(array &$arResult): void
    {
        foreach ($this->modifiersPool as $modifier) {
            $modifier->modify($arResult);
        }
    }

    public static function create(): self
    {
        return new self();
    }

    /**
     * @return array
     */
    public function getModifiersPool(): array
    {
        return $this->modifiersPool;
    }
}
