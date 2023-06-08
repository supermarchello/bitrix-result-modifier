<?php

namespace Supermarchello\BitrixResultModifier;

/**
 *  Тестовый класс
 */
final class ExampleModifier implements ModifierInterface
{
    public function modify(array &$arResult): void
    {
        $arResult['test2'] = 2;
    }

    public function verify(array $arResult): bool
    {
        return !empty($arResult['test']);
    }
}
