<?php

namespace Super\BitrixResultModifier;

interface ModifierInterface
{
    public function modify(array &$arResult): void;
}
