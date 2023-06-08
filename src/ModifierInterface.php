<?php

namespace Supermarchello\BitrixResultModifier;

interface ModifierInterface
{
    public function modify(array &$arResult): void;

    public function verify(array $arResult): bool;
}
